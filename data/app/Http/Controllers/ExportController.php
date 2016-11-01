<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\employees as employees;
use Carbon\Carbon;
use Illuminate\Session;
use Excel;

class ExportController extends Controller
{
    //
public function export(){

set_time_limit ( 300000 ); 

    Excel::create('DataPegawai', function($excel) {

      $excel->sheet('DataPegawai', function($sheet) {
        $users = employees::orderBy('id')->get();
      $sheet->loadView('export', ['users' => $users->toArray()]);
      });
    })->download('xls');
  }



public function import(){


    set_time_limit ( 300000 );

    $results = Excel::load('uploads/DataPegawai.xls')->get();

    foreach ($results as $row) {
    
    employees::updateOrCreate(
        [
        'nip' => $row->nip],
        [        
        
        'no_karpeg' => $row->no_karpeg,
        'nama' => $row->nama,
        'jenis_kelamin' => $row->jenis_kelamin,
        'agama' => $row->agama,
        'tempat_lahir' => $row->tempat_lahir,
        'tanggal_lahir' => $row->tanggal_lahir,
        'tmt_cpns' => $row->tmt_cpns,
        'tmt_pns' => $row->tmt_pns,
        'tmt_pangkat_terakhir' => $row->tmt_pangkat_terakhir,
        'pangkat' => $row->pangkat,
        'golongan' => $row->golongan,
        'jabatan' => $row->jabatan,
        'unit_kerja' => $row->unit_kerja,
        'instansi' => $row->instasi,
        'pendidikan_terakhir' => $row->pendidikan_terakhir,
        'pendidikan_tahun_lulus' => $row->pendidikan_tahun_lulus,
        'pendidikan_univ' => $row->pendidikan_univ,
        'pendidikan_tempat' => $row->pendidikan_tempat,
        'pendidikan_jurusan' => $row->pendidikan_jurusan,
        'status' => $row->status

        ]);
    }
}




public function upload(){

            $target_dir = "uploads/";
            $target_file = $target_dir . "DataPegawai.xls";
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

                    $uploadOk = 1;              
                
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                    
                $uploadOk = 1;
            }
            // Check file size
            // Allow certain file formats
            if($imageFileType != "xls") {
                echo "Sorry, only xls files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } 
            else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                  $this->import();
                  \Session::flash('flash_message', 'Data telah berhasil diimport');
                  } 
                    else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
        return redirect('/getData');
}



   

}
