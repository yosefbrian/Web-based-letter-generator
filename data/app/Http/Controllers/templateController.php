<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Templatesurat as surat;

class templateController extends Controller
{
    public function getData()
    {
        $surat = surat::paginate(10);
        
        return view('cms.index')->with('surat', $surat);
    }

    public function delete($id) 
    {
        surat::find($id)->delete();
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
        return Redirect('/cms');
    }

    public function create(Request $request)
    {
    	$uploadOk = 1;

	    $target_dir = "templates/";
	    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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
	    // Check if $uploadOk is set to 0 by an error
	    if ($uploadOk == 0) {
	      // \Session::flash('flash_message_gagalupload','');
	        // echo "Sorry, your file was not uploaded.";
	    // if everything is ok, try to upload file
	    }
	    else {
	            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	          // \Session::flash('flash_message_', 'Data telah berhasil diimport');
	          }
	            else {
	              \Session::flash('flash_message_berhasilupload','');
	            }
	        }

	    	$template = new surat();
	        $template->nama_surat = $request->get('nama_surat');
	    	$template->filename = basename($_FILES["fileToUpload"]["name"]);
	        $template->save();

	    // \Session::flash('flash_message_tambah','');
	        return redirect('/cms');
    }

    public function update(Request $request, $id)
    {
    	$uploadOk = 1;

	    $target_dir = "templates/";
	    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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
	    // Check if $uploadOk is set to 0 by an error
	    if ($uploadOk == 0) {
	      // \Session::flash('flash_message_gagalupload','');
	        // echo "Sorry, your file was not uploaded.";
	    // if everything is ok, try to upload file
	    }
	    else {
	            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	          // \Session::flash('flash_message_', 'Data telah berhasil diimport');
	          }
	            else {
	              \Session::flash('flash_message_berhasilupload','');
	            }
	        }

	    	$template = surat::find($id);
	        $template->nama_surat = $request->get('nama_surat');
	    	$template->filename = basename($_FILES["fileToUpload"]["name"]);
	        $template->save();

	    // \Session::flash('flash_message_tambah','');
	        return redirect('/cms');
    }

    public function search(Request $request) 
    {
       	$cari = $request->get('search');


        if($cari=='')
        {
        	return redirect()->back(); 
    	}
    	else
    	{
      	$result = surat::where('nama_surat', 'LIKE', '%'.$cari.'%')->paginate(10);
        return view('cms.indexcari')->with('result', $result);

    	}
    }
}
