<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\employees as employees;
use Carbon\Carbon;
use Illuminate\Session;
//use Illuminate\Support\Facades\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
  
  /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    
    public function getData()
    {
        //return view('getData');
          $employeList = employees::paginate(9);
        
        //$booksList = Books::all();
        return view('books.index')->with('employeList', $employeList);
    }
  



    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        // validation rules
        $this->validate($request,
                [
                'nip' => 'required', 
                'nama' => 'required|min:4', 
                'jenis_kelamin' => 'required|min:4',
                ]); 
        
        employees::create($request->all());
         
        \Session::flash('flash_message', 'Pegawai baru telah ditambahkan');
        return redirect('/getData');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $book = employees::find($id);
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $book = employees::findOrFail($id);
        return view('books.edit',  compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request) {
         $this->validate($request,
                [
                'nama' => 'required', 
                ]);
        $book = employees::findOrFail($id);
        $book->update($request->all());
        
        \Session::flash('flash_message', 'Data pegawai tealh diperbarui');
        return redirect('/getData');
    }
    
    public function delete($id) {
        employees::find($id)->delete();
        \Session::flash('flash_message', 'Data pegawai telah dihapus');
        return Redirect('/getData');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {

        employees::find($id)->delete();
        
        \Session::flash('flash_message', 'Data pegawai telah dihapus');
        return Redirect::route('employees');
    }
}