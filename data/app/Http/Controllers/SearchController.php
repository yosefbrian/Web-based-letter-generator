<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\employees as employees;
use Carbon\Carbon;
use Illuminate\Session;
use Illuminate\Support\Facades\Request;

class SearchController extends Controller
{
    public function search() {


        $kata_kunci = Request::input('kata_kunci');
        $employees = employees::where('nama', 'like', '%' . $kata_kunci . '%')->orWhere('nip', 'like', '%' . $kata_kunci . '%')->orWhere('unit_kerja', 'like', '%' . $kata_kunci . '%')->paginate(9);
         $employees->setPath('search');
        return View('books.search')->with('employees', $employees);
        

    }
}
