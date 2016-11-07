<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;

use App\Http\Requests;

class logRecordController extends Controller
{
    public function getData() {
        $record = Record::paginate(10);

        return view('Records.recordadm')->with('record', $record);
    }

    public function searchRecord(Request $request) {
        $cari = $request->get('mhs');
        if ($cari == '') {
            return redirect()->back();
        }
        else {
            $result = Record::where('nama_surat', 'LIKE', '%'.$cari.'%')->orWhere('keterangan', 'LIKE', '%'.$cari.'%')->paginate(10);
            return view('Records.recordadmcari')->with('result', $result);
        }
    }


    public function update(Request $request, $id){
            

            $temp = Record::find($id);
            
            if($temp != null){

            $temp->status = $request->get('stat1');
            $temp->save();

            }

    return redirect('/log');
    }
}
