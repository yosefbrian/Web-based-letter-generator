<?php

// Include classes
include_once('tbs_class.php'); // Load the TinyButStrong template engine
include_once('tbs_plugin_opentbs.php'); // Load the OpenTBS plugin

// prevent from a PHP configuration problem when using mktime() and date()
if (version_compare(PHP_VERSION,'5.1.0')>=0) {
    if (ini_get('date.timezone')=='') {
        date_default_timezone_set('UTC');
    }
}

// Initialize the TBS instance
$TBS = new clsTinyButStrong; // new instance of TBS
$TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); // load the OpenTBS plugin

// ------------------------------
// Prepare some data for the demo
// ------------------------------

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cobacrud";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


// Retrieve the user name to display

$hari = date('j');
$bulan = date('m');
$tahun = date('Y');

switch ($bulan) {
    case "01":
        $tanggal= $hari." Januari ".$tahun;
        break;
    case "02":
        $tanggal=$hari." Februari ".$tahun;
        break;
    case "03":
        $tanggal=$hari." Maret ".$tahun;
        break;
     case "04":
        $tanggal=$hari." April ".$tahun;
        break;
    case "05":
        $tanggal=$hari." Mei ".$tahun;
        break;
    case "06":
        $tanggal=$hari." Juni ".$tahun;
        break;
    case "07":
        $tanggal=$hari." Juli ".$tahun;
        break;
    case "08":
        $tanggal=$hari." Agustus ".$tahun;
        break;
    case "09":
        $tanggal=$hari." September ".$tahun;
        break;
    case "10":
        $tanggal=$hari." Oktober ".$tahun;
        break;
    case "11":
        $tanggal=$hari." November ".$tahun;
        break;
    case "12":
        $tanggal=$hari." Desember ".$tahun;
        break;
    default:
        $tanggal=$hari."Bulan".$tahun;;
}

$kepada = (isset($_POST['kepada'])) ? $_POST['kepada'] : '';
$kepada = trim(''.$kepada);
if ($kepada=='') $kepada = "(kepada)";



for($i=1; $i<=10; $i++){
     // $NIP = ${'NIP'.$i}; 
   // if($NIP==''){

    ${'NIP'.$i} = "";
     ${'nama'.$i} = "";
    ${'no_karpeg'.$i} = "";
    ${'jenis_kelamin'.$i} = "";
    ${'agama'.$i} = "";
    ${'tempat_lahir'.$i} = "";
    ${'tanggal_lahir'.$i} = "";
    ${'tmt_cpns'.$i} = "";
    ${'tmt_pns'.$i} = "";
    ${'tmt_pangkat_terakhir'.$i} = "";
    ${'pangkat'.$i} = "";
    ${'golongan'.$i} = "";
    ${'jabatan'.$i} = "";
    ${'unit_kerja'.$i} = "";
    ${'instansi'.$i} = "";
    ${'pendidikan_terakhir'.$i} = "";
    ${'pendidikan_tahun_lulus'.$i} = "";
    ${'pendidikan_univ'.$i} = "";
    ${'pendidikan_tempat'.$i} = "";
    ${'pendidikan_jurusan'.$i} = "";
    ${'status'.$i} = "";
// }
// else{
//     ${'nama'.$i} = "-";
//     ${'no_karpeg'.$i} = "-";
//     ${'jenis_kelamin'.$i} = "-";
//     ${'agama'.$i} = "-";
//     ${'tempat_lahir'.$i} = "-";
//     ${'tanggal_lahir'.$i} = "-";
//     ${'tmt_cpns'.$i} = "-";
//     ${'tmt_pns'.$i} = "-";
//     ${'tmt_pangkat_terakhir'.$i} = "-";
//     ${'golongan'.$i} = "-";
//     ${'jabatan'.$i} = "-";
//     ${'unit_kerja'.$i} = "-";
//     ${'instansi'.$i} = "-";
//     ${'pendidikan_terakhir'.$i} = "-";
//     ${'pendidikan_tahun_lulus'.$i} = "-";
//     ${'pendidikan_univ'.$i} = "-";
//     ${'pendidikan_tempat'.$i} = "-";
//     ${'pendidikan_jurusan'.$i} = "-";
//     ${'status'.$i} = "-";   
// }

}

$jml_id = (isset($_POST['jml_id'])) ? $_POST['jml_id'] : '';

if($jml_id==''){
    $jml_id=1;
}


for($i=1; $i<=$jml_id; $i++){
    ${'NIP'.$i} = (isset($_POST['NIP'.$i])) ? $_POST['NIP'.$i] : '';
    ${'NIP'.$i} = trim(''.${'NIP'.$i});
    //if (${'NIP'.$j}=='') ${'NIP'.$j} = "(no name)";   

}


$data=array();

for($i=1; $i<=$jml_id; $i++){

    $NIP = ${'NIP'.$i}; 

    $sql = "SELECT * FROM employees where nip = '$NIP'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();


    ${'nama'.$i} = $row["nama"];
    if(${'nama'.$i}==""){
        ${'nama'.$i}="-";
    }    
    ${'no_karpeg'.$i} = $row["no_karpeg"];
    if(${'no_karpeg'.$i}==""){
        ${'no_karpeg'.$i}="-";
    }
    ${'jenis_kelamin'.$i} = $row["jenis_kelamin"];
    if(${'jenis_kelamin'.$i}==""){
        ${'jenis_kelamin'.$i}="-";
    }
    ${'agama'.$i} = $row["agama"];
    if(${'agama'.$i}==""){
        ${'agama'.$i}="-";
    }
    ${'tempat_lahir'.$i} = $row["tempat_lahir"];
    if(${'tempat_lahir'.$i}==""){
        ${'tempat_lahir'.$i}="-";
    }
    ${'tanggal_lahir'.$i} = substr($row["tanggal_lahir"], 0,11);
        if(${'tanggal_lahir'.$i}==""){
        ${'tanggal_lahir'.$i}="-";
    }
    ${'tmt_cpns'.$i} = substr($row["tmt_cpns"],0,11);
    if(${'tmt_cpns'.$i}==""){
        ${'tmt_cpns'.$i}="-";
    }
    ${'tmt_pns'.$i} = substr($row["tmt_cpns"],0,11);
    if(${'tmt_pns'.$i}==""){
        ${'tmt_pns'.$i}="-";
    }
    ${'tmt_pangkat_terakhir'.$i} = substr($row["tmt_cpns"],0,11);
    if(${'tmt_pangkat_terakhir'.$i}==""){
        ${'tmt_pangkat_terakhir'.$i}="-";
    }
    ${'pangkat'.$i} = $row["pangkat"];
        if(${'pangkat'.$i}==""){
        ${'pangkat'.$i}="-";
    }
    ${'golongan'.$i} = $row["golongan"];
        if(${'golongan'.$i}==""){
        ${'golongan'.$i}="-";
    }
    ${'jabatan'.$i} = $row["jabatan"];
    if(${'jabatan'.$i}==""){
        ${'jabatan'.$i}="-";
    }
    ${'unit_kerja'.$i} = $row["unit_kerja"];
    if(${'unit_kerja'.$i}==""){
        ${'unit_kerja'.$i}="-";
    }
    ${'instansi'.$i} = $row["instansi"];
        if(${'instansi'.$i}==""){
        ${'instansi'.$i}="-";
    }
    ${'pendidikan_terakhir'.$i} = $row["pendidikan_terakhir"];
        if(${'pendidikan_terakhir'.$i}==""){
        ${'pendidikan_terakhir'.$i}="-";
    }
    ${'pendidikan_tahun_lulus'.$i} = $row["pendidikan_tahun_lulus"];
    if(${'pendidikan_tahun_lulus'.$i}==""){
        ${'pendidikan_tahun_lulus'.$i}="-";
    }
    ${'pendidikan_univ'.$i} = $row["pendidikan_univ"];
     if(${'pendidikan_univ'.$i}==""){
        ${'pendidikan_univ'.$i}="-";
    }
    ${'pendidikan_tempat'.$i} = $row["pendidikan_tempat"];
    if(${'pendidikan_tempat'.$i}==""){
        ${'pendidikan_tempat'.$i}="-";
    }
    ${'pendidikan_jurusan'.$i} = $row["pendidikan_jurusan"];
    if(${'pendidikan_jurusan'.$i}==""){
        ${'pendidikan_jurusan'.$i}="-";
    }
    ${'status'.$i} = $row["status"];
    if(${'status'.$i}==""){
        ${'status'.$i}="-";
    }

 // ${'nama'.$i} = $row["nama"];
 //    ${'no_karpeg'.$i} = $row["no_karpeg"];
 //    ${'jenis_kelamin'.$i} = $row["jenis_kelamin"];
 //    ${'agama'.$i} = $row["agama"];
 //    ${'tempat_lahir'.$i} = $row["tempat_lahir"];
 //    ${'tanggal_lahir'.$i} = $row["tanggal_lahir"];
 //    ${'tmt_cpns'.$i} = $row["tmt_cpns"];
 //    ${'tmt_pns'.$i} = $row["tmt_pns"];
 //    ${'tmt_pangkat_terakhir'.$i} = $row["tmt_pangkat_terakhir"];
 //    ${'golongan'.$i} = $row["golongan"];
 //    ${'jabatan'.$i} = $row["jabatan"];
 //    ${'unit_kerja'.$i} = $row["unit_kerja"];
 //    ${'instansi'.$i} = $row["instansi"];
 //    ${'pendidikan_terakhir'.$i} = $row["pendidikan_terakhir"];
 //    ${'pendidikan_tahun_lulus'.$i} = $row["pendidikan_tahun_lulus"];
 //    ${'pendidikan_univ'.$i} = $row["pendidikan_univ"];
 //    ${'pendidikan_tempat'.$i} = $row["pendidikan_tempat"];
 //    ${'pendidikan_jurusan'.$i} = $row["pendidikan_jurusan"];
 //    ${'status'.$i} = $row["status"];


    $data[]=array(
        'nip' => ${'NIP'.$i},
        'nama' => ${'nama'.$i},
        'no_karpeg' => ${'no_karpeg'.$i},
        'jenis_kelamin' => ${'jenis_kelamin'.$i},
        'agama' => ${'agama'.$i},
        'tempat_lahir' => ${'tempat_lahir'.$i},
        'tanggal_lahir' => ${'tanggal_lahir'.$i},
        'tmt_cpns' => ${'tmt_cpns'.$i},
        'tmt_pns' => ${'tmt_pns'.$i},
        'tmt_pangkat_terakhir' => ${'tmt_pangkat_terakhir'.$i},
        'pangkat' => ${'pangkat'.$i},
        'golongan' => ${'golongan'.$i},
        'jabatan' => ${'jabatan'.$i},
        'unit_kerja' => ${'unit_kerja'.$i},
        'instansi' => ${'instansi'.$i},
        'pendidikan_terakhir' => ${'pendidikan_terakhir'.$i},
        'pendidikan_tahun_lulus' => ${'pendidikan_tahun_lulus'.$i},
        'pendidikan_univ' => ${'pendidikan_univ'.$i},
        'pendidikan_tempat' => ${'pendidikan_tempat'.$i},
        'pendidikan_jurusan' => ${'pendidikan_jurusan'.$i},
        'status' => ${'status'.$i});

}

/*
// A recordset for merging tables
$data = array();
$data[] = array('rank'=> 'A', 'firstname'=>'Sandra' , 'name'=>'Hill'      , 'number'=>'1523d', 'score'=>200, 'email_1'=>'sh@tbs.com',  'email_2'=>'sandra@tbs.com',  'email_3'=>'s.hill@tbs.com');
$data[] = array('rank'=> 'A', 'firstname'=>'Roger'  , 'name'=>'Smith'     , 'number'=>'1234f', 'score'=>800, 'email_1'=>'rs@tbs.com',  'email_2'=>'robert@tbs.com',  'email_3'=>'r.smith@tbs.com' );
$data[] = array('rank'=> 'B', 'firstname'=>'William', 'name'=>'Mac Dowell', 'number'=>'5491y', 'score'=>130, 'email_1'=>'wmc@tbs.com', 'email_2'=>'william@tbs.com', 'email_3'=>'w.m.dowell@tbs.com' );

// Other single data items
$x_num = 3152.456;
$x_pc = 0.2567;
$x_dt = mktime(13,0,0,2,15,2010);
$x_bt = true;
$x_bf = false;
$x_delete = 1;
*/
// -----------------
// Load the template
// -----------------

$template = (isset($_POST['tpl'])) ? $_POST['tpl'] : '';
$TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8); // Also merge some [onload] automatic fields (depends of the type of document).
$TBS->MergeBlock('a', $data);
/*
// ----------------------
// Debug mode of the demo
// ----------------------
if (isset($_POST['debug']) && ($_POST['debug']=='current')) $TBS->Plugin(OPENTBS_DEBUG_XML_CURRENT, true); // Display the intented XML of the current sub-file, and exit.
if (isset($_POST['debug']) && ($_POST['debug']=='info'))    $TBS->Plugin(OPENTBS_DEBUG_INFO, true); // Display information about the document, and exit.
if (isset($_POST['debug']) && ($_POST['debug']=='show'))    $TBS->Plugin(OPENTBS_DEBUG_XML_SHOW); // Tells TBS to display information when the document is merged. No exit.

// --------------------------------------------
// Merging and other operations on the template
// --------------------------------------------

// Merge data in the body of the document
$TBS->MergeBlock('a,b', $data);

// Change chart series
$ChartNameOrNum = 'a nice chart'; // Title of the shape that embeds the chart
$SeriesNameOrNum = 'Series 2';
$NewValues = array( array('Category A','Category B','Category C','Category D'), array(3, 1.1, 4.0, 3.3) );
$NewLegend = "Updated series 2";
$TBS->PlugIn(OPENTBS_CHART, $ChartNameOrNum, $SeriesNameOrNum, $NewValues, $NewLegend);

// Delete comments
$TBS->PlugIn(OPENTBS_DELETE_COMMENTS);

*/

// -----------------
// Output the result
// -----------------

// Define the name of the output file
$save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
$output_file_name = str_replace('.', '_'.date('Y-m-d').$save_as.'.', $template);
if ($save_as==='') {
    // Output the result as a downloadable file (only streaming, no data saved in the server)
    $TBS->Show(OPENTBS_DOWNLOAD, $output_file_name); // Also merges all [onshow] automatic fields.
    // Be sure that no more output is done, otherwise the download file is corrupted with extra data.
    exit();
} else {
    // Output the result as a file on the server.
    $TBS->Show(OPENTBS_FILE, $output_file_name); // Also merges all [onshow] automatic fields.
    // The script can continue.
    exit("File [$output_file_name] has been created.");
}
$conn->close();
?>