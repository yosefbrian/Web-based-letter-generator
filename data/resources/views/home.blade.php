@extends('layouts.app')

@section('head.style')
<link rel="stylesheet" href="css/bootstrap-select.css">
@show

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <ul class="nav nav-tabs">
                    <li class="active">
                      <a href="{{ url('/home') }}">Surat</a>
                    </li>
                    <li>
                      <a href="{{ url('/getData') }}">Data</a>
                    </li>
                  </ul>
                  <br>
                    
                     <form role="form" id="form1" method="post" action="templates/demo_merge.php" class="col-md-5 well">
                      <label class="control-label" for="lunch">Jenis Surat</label>
                    <div class="form-group">
                      <select id="surat" name="tpl" class="form-control selectpicker" data-live-search="true" title="Pilih Jenis Surat" >
                        <option value="cuti_besar.odt">Cuti Besar</option>
                        <option value="cuti_haji.odt">Cuti Haji</option>
                        <option value="cuti_umroh.odt">Cuti Umroh</option>
                        <option value="cuti_alasan_penting.odt">Cuti Alasan Penting</option>
                        <option value="cuti_tahunan.odt">Cuti Tahunan</option>
                        <option value="ijin_belajar.odt">Ijin Belajar</option>
                        <option value="ijin_cuti_bersalin_naban.odt">Ijin Cuti Bersalin Naban</option>
                        <option value="ijin_cuti_bersalin.odt">Ijin Cuti Bersalin</option>
                        <option value="ijin_cuti_sakit.odt">Ijin Cuti Sakit</option>
                        <option value="pengajuan_taspen.odt">Pengajuan Taspen</option>
                        <option value="pensiun_janda.odt">Pensiun Janda</option>
                        <option value="permohonan_pensiun.odt">Permohonan Pensiun</option>
                        <option value="pemberian_kenaikan_gaji.odt">Pemberian Kenaikan Gaji</option>
                        <option value="plt(penunjukkan).odt">PLT(Penunjukkan)</option>
                        <option value="rekomendasi.odt">Rekomendasi KA Dinas</option>
                        <option value="seleksi_masuk_perguruan_tinggi.odt">Seleksi Masuk Perguruan Tinggi</option>
                        <option value="SPMJ.odt">SPMJ(Surat Pernyataan Telah Menduduki Jabatan</option>
                        <option value="SPMT.odt">SPMT(Surat Pernyataan Melakukan Tugas</option>
                        <option value="SPPD.odt">SPPD(Surat Perintah Perjalanan Dinas)</option>
                        <option value="keterangan_anak_yatim.odt">Keterangan Anak Yatim</option>
                        <option value="keterangan_tidak_dihukum.odt">Keterangan Sedang Tidak Menjalani Hukuman</option>
                        <option value="laporan_kematian.odt">Laporan Kematian</option>
                        <option value="pembatalan_permohonan_cuti.odt">Pembatalan Permohonan Cuti Besar</option>
                        <option value="surat_tugas.odt">Surat Perintah Tugas</option>
                      </select>
                    </div>
                       <div class="form-group" >
                       <label class="control-label" for="kepada">Surat Ini Ditujukan Kepada</label>
                            <input placeholder="Masukkan Penerima Surat" name="kepada" id="kepada" type="text" class="form-control"/>
                      </div>


                      <div class="form-group" id="grpid">
                      <label class="control-label" for="grp_id">Jumlah Pegawai</label><br>
                        <select id="jml_id" name="jml_id" class="form-control selectpicker">
                         <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>
                      </div>


                      <div class="form-group" >
                       <label class="control-label" for="NIP">Masukkan NIP</label>
                            <input name="NIP1" placeholder="Masukkan NIP" id="NIP1" type="text" class="form-control"/>
                      

                      <div class="form-group">
                       <label class="control-label">Tanggal Mulai</label>
                            <input name="tanggalmulai1" id="tanggalmulai1" type="date" class="form-control"/>
                      </div>

                      <div class="form-group">
                       <label class="control-label">Lama Cuti (dalam hari)</label>
                            <input name="lamacuti1" id="lamacuti1" type="text" class="form-control"/>
                      </div>
                      </div>

                      <div class="form-group" id="grpnip2">
                       <label class="control-label" for="NIP2">Masukkan NIP</label>
                            <input name="NIP2" placeholder="Masukkan NIP" id="NIP2" type="text" class="form-control" />

                      <div class="form-group">
                       <label class="control-label">Tanggal Mulai</label>
                            <input name="tanggalmulai2" id="tanggalmulai2" type="date" class="form-control"/>
                      </div>

                      <div class="form-group">
                       <label class="control-label">Lama Cuti (dalam hari)</label>
                            <input name="lamacuti2" id="lamacuti2" type="text" class="form-control"/>
                      </div>
                      </div>

                      <div class="form-group" id="grpnip3">
                       <label class="control-label" for="NIP3">Masukkan NIP</label>
                            <input name="NIP3" placeholder="Masukkan NIP" id="NIP3" type="text" class="form-control"/>

                      <div class="form-group">
                       <label class="control-label">Tanggal Mulai</label>
                            <input name="tanggalmulai3" id="tanggalmulai3" type="date" class="form-control"/>
                      </div>

                      <div class="form-group">
                       <label class="control-label">Lama Cuti (dalam hari)</label>
                            <input name="lamacuti3" id="lamacuti3" type="text" class="form-control"/>
                      </div>

                      </div>
                      <div class="form-group" id="grpnip4">
                       <label class="control-label" for="NIP4">Masukkan NIP</label>
                            <input name="NIP4" placeholder="Masukkan NIP" id="NIP3" type="text" class="form-control"/>

                      <div class="form-group">
                       <label class="control-label">Tanggal Mulai</label>
                            <input name="tanggalmulai4" id="tanggalmulai4" type="date" class="form-control"/>
                      </div>

                      <div class="form-group">
                       <label class="control-label">Lama Cuti (dalam hari)</label>
                            <input name="lamacuti4" id="lamacuti4" type="text" class="form-control"/>
                      </div>

                      </div>

                      <div class="form-group" id="grpnip5">
                       <label class="control-label" for="NIP5">Masukkan NIP</label>
                            <input name="NIP5" placeholder="Masukkan NIP" id="NIP5" type="text" class="form-control"/>
                      <div class="form-group">
                       <label class="control-label">Tanggal Mulai</label>
                            <input name="tanggalmulai5" id="tanggalmulai5" type="date" class="form-control"/>
                      </div>

                      <div class="form-group">
                       <label class="control-label">Lama Cuti (dalam hari)</label>
                            <input name="lamacuti5" id="lamacuti5" type="text" class="form-control"/>
                      </div>
                      </div>

                      <div class="form-group" id="grpnip6">
                       <label class="control-label" for="NIP6">Masukkan NIP</label>
                            <input name="NIP6" placeholder="Masukkan NIP" id="NIP6" type="text" class="form-control"/>
                      <div class="form-group">
                       <label class="control-label">Tanggal Mulai</label>
                            <input name="tanggalmulai6" id="tanggalmulai6" type="date" class="form-control"/>
                      </div>

                      <div class="form-group">
                       <label class="control-label">Lama Cuti (dalam hari)</label>
                            <input name="lamacuti6" id="lamacuti6" type="text" class="form-control"/>
                      </div>      
                      </div>

                      <div class="form-group" id="grpnip7">
                       <label class="control-label" for="NIP7">Masukkan NIP</label>
                            <input name="NIP7" placeholder="Masukkan NIP" id="NIP7" type="text" class="form-control"/>
                                            <div class="form-group">
                       <label class="control-label">Tanggal Mulai</label>
                            <input name="tanggalmulai7" id="tanggalmulai7" type="date" class="form-control"/>
                      </div>

                      <div class="form-group">
                       <label class="control-label">Lama Cuti (dalam hari)</label>
                            <input name="lamacuti7" id="lamacuti7" type="text" class="form-control"/>
                      </div>
                      </div>

                      <div class="form-group" id="grpnip8">
                       <label class="control-label" for="NIP8">Masukkan NIP</label>
                            <input name="NIP8" placeholder="Masukkan NIP" id="NIP8" type="text" class="form-control"/>
                      <div class="form-group">
                       <label class="control-label">Tanggal Mulai</label>
                            <input name="tanggalmulai8" id="tanggalmulai8" type="date" class="form-control"/>
                      </div>

                      <div class="form-group">
                       <label class="control-label">Lama Cuti (dalam hari)</label>
                            <input name="lamacuti8" id="lamacuti8" type="text" class="form-control"/>
                      </div>
                      </div>

                      <div class="form-group" id="grpnip9">
                       <label class="control-label" for="NIP9">Masukkan NIP</label>
                            <input name="NIP9" placeholder="Masukkan NIP" id="NIP9" type="text" class="form-control"/>
                      <div class="form-group">
                       <label class="control-label">Tanggal Mulai</label>
                            <input name="tanggalmulai9" id="tanggalmulai9" type="date" class="form-control"/>
                      </div>

                      <div class="form-group">
                       <label class="control-label">Lama Cuti (dalam hari)</label>
                            <input name="lamacuti9" id="lamacuti9" type="text" class="form-control"/>
                      </div>
                      </div>

                      <div class="form-group" id="grpnip10">
                       <label class="control-label" for="NIP10">Masukkan NIP</label>
                            <input name="NIP10" placeholder="Masukkan NIP" id="NIP10" type="text" class="form-control"/>
                      <div class="form-group">
                       <label class="control-label">Tanggal Mulai</label>
                            <input name="tanggalmulai10" id="tanggalmulai10" type="date" class="form-control"/>
                      </div>

                      <div class="form-group">
                       <label class="control-label">Lama Cuti (dalam hari)</label>
                            <input name="lamacuti10" id="lamacuti10" type="text" class="form-control"/>
                      </div>
                      </div>



                      <input type="submit" name="btn_result" value="Cetak" class="btn btn-primary" style="float:right" />
                      
                       
                  </form>
                    <div class="col-xs-7">
                        <h4>Petunjuk Penggunaan</h4>
                        <ol>
                          <li>Pilih jenis surat yang akan dibuat</li>
                          <li>Masukkan penerima surat</li>
                          <li>Tentukan jumlah pegawai yang akan dibuatkan surat</li>
                          <li>Masukkan NIP pegawai yang akan dibuatkan surat</li>
                          <li>Klik Cetak</li>
                        </ol>
                        <p>Setelah Anda memilih cetak maka file akan otomatis terunduh melalui browser yang Anda gunakan saat ini.</p>                            
                        
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('body.script')
<script src="js/bootstrap-select.js"></script>
<script>
$(document).ready(function() {
    $('.selectpicker').selectpicker({
        style: 'btn-info',
        size: 4
    });
    
})
</script>

<script>
    for(i=2; i<=10; i++){
      $('#grpnip'+i).hide();
    }
    $('#grpid').hide();
    $('#surat').on('change', function() {
    if($(this).val() == "ijin_belajar.odt" || $(this).val() == "cuti_besar.odt" || $(this).val() == "pengajuan_taspen.odt" || $(this).val() == "permohonan_pensiun.odt" || $(this).val() == "cuti_haji.odt") {
      $('#grpid').show();
    } 
    else{
      $('#grpid').hide();

      for(i=2; i<=10; i++){
        $('#grpnip'+i).hide();
        }
    }
    if($(this).val() == "cuti_umroh.odt" || $(this).val() == "cuti_besar.odt" || $(this).val() == "cuti_tahunan.odt" || $(this).val() == "cuti_alasan_penting.odt" || $(this).val() == "cuti_haji.odt" || $(this).val() == "ijin_cuti_sakit.odt" || $(this).val() == "ijin_cuti_bersalin.odt" || $(this).val() == "ijin_cuti_bersalin_naban.odt") {
      $('#tanggalmulai').show();
      $('#lamacuti').show();
    }
    else{
      $('#tanggalmulai').hide();
      $('#lamacuti').hide();
    } 
                                        });

                        $('#jml_id').on('change', function() {
                            if($(this).val() == "1" ) {
                                $('#grpnip').show();

                              for(i=2; i<=10; i++){
                                //document.getElementById('NIP'+i).value = "";
                                $('#grpnip'+i).hide();

                              }
                            }

                            else if($(this).val() == "2" ) {
                                $('#grpnip2').show();
                            for(i=3; i<=10; i++){
                                $('#grpnip'+i).hide();
                              }

                            }

                        else if($(this).val() == "3" ) {
                                for(i=2; i<=3; i++){
                                $('#grpnip'+i).show();

                              }
                              for(i=4; i<=10; i++){
                                $('#grpnip'+i).hide();
                              }

                            }
                        else if($(this).val() == "4" ) {
                                for(i=2; i<=4; i++){
                                $('#grpnip'+i).show();

                              }
                              for(i=5; i<=10; i++){
                                $('#grpnip'+i).hide();
                              }
                            }
                        else if($(this).val() == "5" ) {
                                for(i=2; i<=5; i++){
                                $('#grpnip'+i).show();

                              }
                              for(i=6; i<=10; i++){
                                $('#grpnip'+i).hide();
                              }
                            }
                        else if($(this).val() == "6" ) {
                                for(i=2; i<=6; i++){
                                $('#grpnip'+i).show();
                              }
                              for(i=7; i<=10; i++){
                                $('#grpnip'+i).hide();
                              }
                            }
                            else if($(this).val() == "7" ) {
                                for(i=2; i<=7; i++){
                                $('#grpnip'+i).show();
                              }
                              for(i=8; i<=10; i++){
                                $('#grpnip'+i).hide();
                              }
                            }
                        else if($(this).val() == "8" ) {
                                for(i=2; i<=8; i++){
                                $('#grpnip'+i).show();
                              }
                              for(i=9; i<=10; i++){
                                $('#grpnip'+i).hide();
                              }

                            }
                        else if($(this).val() == "9" ) {
                                for(i=2; i<=9; i++){
                                $('#grpnip'+i).show();
                              }
                              $('#grpnip10').hide();
                            }
                        else if($(this).val() == "10" ) {
                                for(i=2; i<=10; i++){
                                $('#grpnip'+i).show();
                              }
                            }
                          });


                            </script>
@show