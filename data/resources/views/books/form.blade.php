<h4><b>Nomor Identitas</b></h4>
<hr/>
<div class="panel-group">
<div class="col-xs-12">
  <div class="col-xs-6">
    <div class="form-group">
    {!! Form::label('NIP', 'NIP') !!}
    {!! Form::text('nip', null, ['class'=> 'form-control', 'placeholder' => "Masukkan NIP" ]) !!}
    </div>
  </div>
  <div class="col-xs-6">
    <div class="form-group">
    {!! Form::label('No Karpeg', 'No Karpeg') !!}
    {!! Form::text('no_karpeg', null, ['class'=> 'form-control', 'placeholder' => "Masukkan Nomor Kartu Pegawai" ]) !!}
    </div>
  </div>
</div>
</div>

<h4><b>Data Pribadi</b></h4>
<hr/>
<div class="panel-group">

<div class="col-xs-12">
  <div class="col-xs-9">
    <div class="form-group">
    {!! Form::label('Nama', 'Nama') !!}
    {!! Form::text('nama', null, ['class'=> 'form-control', 'placeholder' => "Masukkan Nama" ]) !!}
    </div>
  </div>
  <div class="col-xs-3">
    <div class="form-group">
      {!! Form::label('Jenis Kelamin', 'Jenis Kelamin') !!}
<?php
      
    if(isset($book->jenis_kelamin)) {
       $jenis_kelamin=$book->jenis_kelamin;
      }
    else{$jenis_kelamin='Pria';}
      
    $pilihan='Wanita';

    if($jenis_kelamin=='Wanita' || $jenis_kelamin=='WANITA'){
        $pilihan='Pria';
    }
?>
      {!! Form::select('jenis_kelamin', [$jenis_kelamin => $jenis_kelamin, $pilihan => $pilihan], null, ['class'=>'form-control']) !!}
    </div>
  </div>
</div>
<div class="col-xs-12">
  <div class="col-xs-4">
    <div class="form-group">
    {!! Form::label('Agama', 'Agama') !!}
    
<?php
      
    if(isset($book->agama)) {
       $agama=$book->agama;
      }
    else{$agama='ISLAM';}

$agm = array('', 'ISLAM', 'KATHOLIK', 'KRISTEN', 'HINDU', 'BUDHA');

    foreach($agm as $ag){
  if($ag == $agama){
    $agm[0]=$agama;      
  }
}    

?>

    {!! Form::select('agama', [$agm[0] => 'Pilih agama', 
                              $agm[1] => $agm[1],
                              $agm[2] => $agm[2],
                              $agm[3] => $agm[3],
                              $agm[4] => $agm[4],
                              $agm[5] => $agm[5]], null, ['class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-4">
    <div class="form-group">
    {!! Form::label('Tempat Lahir', 'Tempat Lahir') !!}
    {!! Form::text('tempat_lahir', null, ['class'=> 'form-control', 'placeholder' => "Masukkan Tempat Lahir" ]) !!}
    </div>
  </div>
  <div class="col-xs-4">
    <div class="form-group">
    

    <?php if(isset($book->tanggal_lahir)) {
       $tanggal_lahir=substr($book->tanggal_lahir,0,11);
      }
            else{
        $tanggal_lahir='';
      }
      ?>
    {!! Form::label('Tanggal Lahir', 'Tanggal Lahir') !!}
    {!! Form::text('tanggal_lahir', $tanggal_lahir, ['class'=> 'form-control', 'placeholder' => "dd/mm/yyyy"]) !!}

    </div>
  </div>
</div>
</div>  

<h4><b>Tanggal Mulai Tugas</b></h4>
<hr/>
<div class="panel-group">
<div class="col-xs-12">
  <div class="col-xs-4">
    <div class="form-group">


    <?php if(isset($book->tmt_cpns)) {
       $tmt_cpns=substr($book->tmt_cpns,0,11);
      }
            else{
        $tmt_cpns='';
      }
      ?>
    {!! Form::label('TMT CPNS', 'TMT CPNS') !!}
    {!! Form::text('tmt_cpns', $tmt_cpns, ['class'=> 'form-control', 'placeholder' => "dd/mm/yyyy"]) !!}
    </div>
  </div>
  <div class="col-xs-4">
    <div class="form-group">
    {!! Form::label('TMT PNS', 'TMT PNS') !!}
    {!! Form::text('tmt_pns', null, ['class'=> 'form-control', 'placeholder' => "dd/mm/yyyy"]) !!}
    </div>
  </div>
  <div class="col-xs-4">
    <div class="form-group">
    <?php if(isset($book->tmt_pangkat_terakhir)) {
       $tmt_pangkat_terakhir=substr($book->tmt_pangkat_terakhir,0,11);
      }
      else{
        $tmt_pangkat_terakhir='';
      }
      ?>
    {!! Form::label('TMT Pangkat Terakhir', 'TMT Pangkat Terakhir') !!}
    {!! Form::text('tmt_pangkat_terakhir', $tmt_pangkat_terakhir, ['class'=> 'form-control', 'placeholder' => "dd/mm/yyyy"]) !!}
    </div>
  </div>
</div>

<h4><b>Jabatan & Kedudukan</b></h4>
<hr/>
<div class="panel-group">

<div class="col-xs-12">
  <div class="col-xs-6">
    <div class="form-group">
    {!! Form::label('Jabatan', 'Jabatan') !!}
    {!! Form::text('jabatan', null, ['class'=> 'form-control', 'placeholder' => "Masukkan Jabatan"]) !!}
    </div>
  </div>




  <div class="col-xs-2">
    <div class="form-group">
    {!! Form::label('Golongan', 'Golongan') !!}

    <?php
      
    if(isset($book->golongan)) {
       $golongan=$book->golongan;
      }
    else{$golongan='I/a';}

    $pilihan =array('Pilih Golongan','I/a','I/b','I/c','I/d','II/a','II/b','II/c','II/d','III/a','III/b','III/c','III/d','IV/a','IV/b','IV/c','IV/d','IV/e');

foreach($pilihan as $opsi){
  if($opsi == $golongan){
    $pilihan[0]=$opsi;
  }
}
     
    
?>

{!! Form::select('golongan', [
                              $pilihan[0] => 'Pilih Golongan', 
                              $pilihan[1] => $pilihan[1],
                              $pilihan[2] => $pilihan[2],
                              $pilihan[3] => $pilihan[3],
                              $pilihan[4] => $pilihan[4],

                              $pilihan[5] => $pilihan[5], 
                              $pilihan[6] => $pilihan[6],
                              $pilihan[7] => $pilihan[7],
                              $pilihan[8] => $pilihan[8],
                              $pilihan[9] => $pilihan[9],


                              $pilihan[10] => $pilihan[10], 
                              $pilihan[11] => $pilihan[11],
                              $pilihan[12] => $pilihan[12],
                              $pilihan[13] => $pilihan[13],
                              $pilihan[14] => $pilihan[14],

                              $pilihan[15] => $pilihan[15], 
                              $pilihan[16] => $pilihan[16],
                              $pilihan[17] => $pilihan[17] 
                              ], null,['class'=>'form-control', 'id'=>'golongan']) !!}
    </div>
  </div>
  <div class="col-xs-4">
    <div class="form-group">
    {!! Form::label('Pangkat', 'Pangkat') !!}
    

    <?php 

   if(isset($book->pangkat)) {
       $pangkat=$book->pangkat;
      }  
      else{$pangkat='Juru Muda';}


    $pngkt = array('', 'Juru Muda', 'Juru Muda Tk I', 'Juru', 'Juru Tk I', 'Pengatur Muda', 'Pengatur Muda Tk I', 'Pengatur', 'Pengatur Tk I', 'Penata Muda', 'Penata Muda Tk I', 'Penata', 'Penata Tk 1', 'Pembina', 'Pembina Tk 1', 'Pembina Utama Muda', 'Pembina Utama Madya', 'Pembina Utama');    

    foreach($pngkt as $pgkt){
  if($pgkt == $pangkat){
    $pngkt[0]=$pangkat;      
  }
}



   ?>



    {!! Form::select('pangkat', [$pngkt[0]=>$pngkt[0],
                                 $pngkt[1]=>$pngkt[1],
                                 $pngkt[2]=>$pngkt[2],
                                 $pngkt[3]=>$pngkt[3],
                                 $pngkt[4]=>$pngkt[4],
                                 $pngkt[5]=>$pngkt[5],
                                 $pngkt[6]=>$pngkt[6],
                                 $pngkt[7]=>$pngkt[8],
                                 $pngkt[8]=>$pngkt[8],
                                 $pngkt[9]=>$pngkt[9],
                                 $pngkt[10]=>$pngkt[10],
                                 $pngkt[11]=>$pngkt[11],
                                 $pngkt[12]=>$pngkt[12],
                                 $pngkt[13]=>$pngkt[13],
                                 $pngkt[14]=>$pngkt[14],
                                 $pngkt[15]=>$pngkt[15],
                                 $pngkt[16]=>$pngkt[16],
                                 $pngkt[17]=>$pngkt[17]
                                  ], null, ['class'=> 'form-control', 'id'=>'pangkat']) !!}


    </div>


  </div>




</div>


<div class="col-xs-12">
  <div class="col-xs-6">
    <div class="form-group">
    {!! Form::label('Unit Kerja', 'Unit Kerja') !!}
    {!! Form::text('unit_kerja', null, ['class'=> 'form-control', 'placeholder' => "Masukkan Unit Kerja (contoh : SMAN 1)"]) !!}
    </div>
  </div>
  <div class="col-xs-6">
    <div class="form-group">
    {!! Form::label('Instansi', 'Instansi') !!}
    {!! Form::text('instansi', null, ['class'=> 'form-control', 'placeholder' => "Masukkan Instansi (contoh : Dinas Pendidikan)"]) !!}
    </div>
  </div>
</div>
  
<h4><b>Pendidikan</b></h4>
<hr/>
<div class="panel-group">
  
<div class="col-xs-12">
  <div class="col-xs-4">
    <div class="form-group">
    {!! Form::label('Pendidikan Terakhir', 'Jenjang Pendidikan Terakhir') !!}
    {!! Form::text('pendidikan_terakhir', null, ['class'=> 'form-control', 'placeholder' => "Masukkan Jenjang Pendidikan (contoh : S1)"]) !!}
    </div>
  </div>
  <div class="col-xs-4">
    <div class="form-group">
    {!! Form::label('Pendidikan Tahun Lulus', 'Tahun Lulus') !!}
    {!! Form::text('pendidikan_tahun_lulus', null, ['class'=> 'form-control', 'placeholder' => "yyyy"]) !!}
    </div>
  </div>
  <div class="col-xs-4">
    <div class="form-group">
    {!! Form::label('Pendidikan Universitas', 'Nama Instansi Pendidikan') !!}
    {!! Form::text('pendidikan_univ', null, ['class'=> 'form-control', 'placeholder' => "Masukkan Instansi Pendidikan (contoh : UGM)"]) !!}
    </div>
  </div>
</div>
  
<div class="col-xs-12">
  <div class="col-xs-7">
    <div class="form-group">
    {!! Form::label('Pendidikan Tempat', 'Lokasi Instansi Pendidikan') !!}
    {!! Form::text('pendidikan_tempat', null, ['class'=> 'form-control', 'placeholder' => "Masukkan Lokasi (contoh : Yogyakarta)"]) !!}
    </div>
  </div>
  <div class="col-xs-5">
    <div class="form-group">
    {!! Form::label('Pendidikan Jurusan', 'Jurusan') !!}
    {!! Form::text('pendidikan_jurusan', null, ['class'=> 'form-control', 'placeholder' => "Masukkan Jurusan"]) !!}
    </div>
  </div>
</div>
</div>

<h4><b>Status Pernikahan</b></h4>
<hr/>
<div class="panel-group">
  <div class="col-xs-12">
    <div class="col-xs-3">
    <div class="form-group">
        {!! Form::label('Status', 'Status') !!}

<?php 
    if(isset($book->status)) {
       $status=$book->status;
      }  
     else{$status='KAWIN';}
   
   $stat = array('', 'KAWIN', 'BELUM KAWIN', 'TIDAK KAWIN', 'JANDA', 'DUDA');
    foreach($stat as $sta){
  if($sta == $status){
    $stat[0]=$status;      
  }
}
?>
  
        {!! Form::select('status', [$stat[0]=>'Pilih status',
                                    $stat[1]=>$stat[1],
                                    $stat[2]=>$stat[2],
                                    $stat[3]=>$stat[3],
                                    $stat[4]=>$stat[4],
                                    $stat[5]=>$stat[5]
                                    ], null, ['class'=> 'form-control']) !!}



    </div>
    </div>
  </div>
</div>


<div class="col-xs-12">
  <div style="float:right">
  <button class="btn btn-primary btn-simple" onclick="goBack()">Kembali</button>
  {!! Form::submit($submitTextButton, array('class' => 'btn btn-warning btn-simple')) !!}
  </div>
</div>

  
@section('body.script')
<script>
function goBack() {
    window.history.back();
}
</script>
@show

