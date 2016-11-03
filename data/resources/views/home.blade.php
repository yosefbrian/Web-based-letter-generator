@extends('layouts.app')

@section('head.style')
<link rel="stylesheet" href="css/bootstrap-select.css">
@show

@section('page.location')
Buat Surat
@endsection

@section('side.content')
<ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="{{ url('/') }}">
            <i class="fa fa-files-o"></i>
            <span>Buat Surat</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{ url('/getData') }}">
            <i class="fa fa-dashboard"></i> <span>Data Pegawai</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ url('getData/employees/create') }}"><i class="fa fa-circle-o"></i>Tambah Data</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Log</span>
          </a>
        </li>
      </ul>
@endsection

@section('content')
<!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Buat Surat</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <form role="form" id="form1" method="post" action="templates/demo_merge.php" class="col-xs-12">
                      <label class="control-label" for="lunch">Jenis Surat</label>
                      <div class="form-group">
                      <select required="required" id="surat" name="tpl" class="form-control selectpicker" data-live-search="true" title="Pilih Jenis Surat" >
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
                        <select id="jml_id" name="jml_id" class="form-control selectpicker" title="Pilih Angka">
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


                      <div class="form-group">
                       <label class="control-label" for="NIP">Masukkan NIP</label>
                            <input name="NIP1" placeholder="Masukkan NIP" id="NIP1" type="text" class="form-control"/>
                      
                      <div class="form-group" id="grptanggal1">
                       <label class="control-label">Tanggal Mulai Cuti</label>
                        <br>
                          <div class="col-xs-4">
                          <select name="DOBDay1" class="form-control">
                            <option> - Hari - </option>
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
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBMonth1" class="form-control">
                            <option> - Bulan - </option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBYear1" class="form-control">
                            <option> - Tahun - </option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>                            
                          </select>
                          </div>
                          

                       <label class="control-label">Lama Cuti (hanya angka)</label>
                            <input name="lamacuti1" id="lamacuti1" type="text" class="form-control"/>
                      </div>
                      </div>

                      <div class="form-group" id="grpnip2">
                      <hr>
                       <label class="control-label" for="NIP2">Masukkan NIP</label>
                            <input name="NIP2" placeholder="Masukkan NIP" id="NIP2" type="text" class="form-control" />

                      <div class="form-group" id="grptanggal2">
                       <label class="control-label">Tanggal Mulai Cuti</label>
                      <br>
                          <div class="col-xs-4">
                          <select name="DOBDay2" class="form-control">
                            <option> - Hari - </option>
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
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBMonth2" class="form-control">
                            <option> - Bulan - </option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBYear2" class="form-control">
                            <option> - Tahun - </option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>                            
                          </select>
                          </div>
                      

                      
                       <label class="control-label">Lama Cuti (hanya angka)</label>
                            <input name="lamacuti2" id="lamacuti2" type="text" class="form-control"/>
                      </div>
                      </div>

                      <div class="form-group" id="grpnip3">
                      <hr>
                       <label class="control-label" for="NIP3">Masukkan NIP</label>
                            <input name="NIP3" placeholder="Masukkan NIP" id="NIP3" type="text" class="form-control"/>

                      <div class="form-group" id="grptanggal3">
                       <label class="control-label">Tanggal Mulai Cuti</label>
<br>
                          <div class="col-xs-4">
                          <select name="DOBDay3" class="form-control">
                            <option> - Hari - </option>
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
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBMonth3" class="form-control">
                            <option> - Bulan - </option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBYear3" class="form-control">
                            <option> - Tahun - </option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>                            
                          </select>
                          </div>
                      

                      
                       <label class="control-label">Lama Cuti (hanya angka)</label>
                            <input name="lamacuti3" id="lamacuti3" type="text" class="form-control"/>
                      </div>

                      </div>

                      <div class="form-group" id="grpnip4">
                      <hr>
                       <label class="control-label" for="NIP4">Masukkan NIP</label>
                            <input name="NIP4" placeholder="Masukkan NIP" id="NIP3" type="text" class="form-control"/>

                      <div class="form-group" id="grptanggal4">
                       <label class="control-label">Tanggal Mulai Cuti</label>
<br>
                          <div class="col-xs-4">
                          <select name="DOBDay4" class="form-control">
                            <option> - Hari - </option>
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
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBMonth4" class="form-control">
                            <option> - Bulan - </option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBYear4" class="form-control">
                            <option> - Tahun - </option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>                            
                          </select>
                          </div>

                       <label class="control-label">Lama Cuti (hanya angka)</label>
                            <input name="lamacuti4" id="lamacuti4" type="text" class="form-control"/>
                      </div>

                      </div>

                      <div class="form-group" id="grpnip5">
                      <hr>
                       <label class="control-label" for="NIP5">Masukkan NIP</label>
                            <input name="NIP5" placeholder="Masukkan NIP" id="NIP5" type="text" class="form-control"/>
                      <div class="form-group" id="grptanggal5">
                      <label class="control-label">Tanggal Mulai Cuti</label>
<br>
                          <div class="col-xs-4">
                          <select name="DOBDay5" class="form-control">
                            <option> - Hari - </option>
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
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBMonth5" class="form-control">
                            <option> - Bulan - </option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBYear5" class="form-control">
                            <option> - Tahun - </option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>                            
                          </select>
                          </div>
                      
                       <label class="control-label">Lama Cuti (hanya angka)</label>
                            <input name="lamacuti5" id="lamacuti5" type="text" class="form-control"/>
                      </div>
                      </div>

                      <div class="form-group" id="grpnip6">
                      <hr>
                       <label class="control-label" for="NIP6">Masukkan NIP</label>
                            <input name="NIP6" placeholder="Masukkan NIP" id="NIP6" type="text" class="form-control"/>
                      <div class="form-group" id="grptanggal6">
                       <label class="control-label">Tanggal Mulai Cuti</label>
<br>
                          <div class="col-xs-4">
                          <select name="DOBDay6" class="form-control">
                            <option> - Hari - </option>
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
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBMonth6" class="form-control">
                            <option> - Bulan - </option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBYear6" class="form-control">
                            <option> - Tahun - </option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>                            
                          </select>
                          </div>
                      
                       <label class="control-label">Lama Cuti (hanya angka)</label>
                            <input name="lamacuti6" id="lamacuti6" type="text" class="form-control"/>
                      </div>      
                      </div>

                      <div class="form-group" id="grpnip7">
                      <hr>
                       <label class="control-label" for="NIP7">Masukkan NIP</label>
                            <input name="NIP7" placeholder="Masukkan NIP" id="NIP7" type="text" class="form-control"/>
                      <div class="form-group" id="grptanggal7">
                        <label class="control-label">Tanggal Mulai Cuti</label>
<br>
                          <div class="col-xs-4">
                          <select name="DOBDay7" class="form-control">
                            <option> - Hari - </option>
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
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBMonth7" class="form-control">
                            <option> - Bulan - </option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBYear7" class="form-control">
                            <option> - Tahun - </option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>                            
                          </select>
                          </div>

                       <label class="control-label">Lama Cuti (hanya angka)</label>
                            <input name="lamacuti7" id="lamacuti7" type="text" class="form-control"/>
                      </div>
                      </div>

                      <div class="form-group" id="grpnip8">
                      <hr>
                       <label class="control-label" for="NIP8">Masukkan NIP</label>
                            <input name="NIP8" placeholder="Masukkan NIP" id="NIP8" type="text" class="form-control"/>
                      <div class="form-group" id="grptanggal8">
                       <label class="control-label">Tanggal Mulai Cuti</label>
                    <br>
                          <div class="col-xs-4">
                          <select name="DOBDay8" class="form-control">
                            <option> - Hari - </option>
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
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBMonth8" class="form-control">
                            <option> - Bulan - </option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBYear8" class="form-control">
                            <option> - Tahun - </option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>                            
                          </select>
                          </div>

                       <label class="control-label">Lama Cuti (hanya angka)</label>
                            <input name="lamacuti8" id="lamacuti8" type="text" class="form-control"/>
                      </div>
                      </div>

                      <div class="form-group" id="grpnip9">
                      <hr>
                       <label class="control-label" for="NIP9">Masukkan NIP</label>
                            <input name="NIP9" placeholder="Masukkan NIP" id="NIP9" type="text" class="form-control"/>
                      <div class="form-group" id="grptanggal9">
                       <label class="control-label">Tanggal Mulai Cuti</label>
<br>
                          <div class="col-xs-4">
                          <select name="DOBDay9" class="form-control">
                            <option> - Hari - </option>
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
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBMonth9" class="form-control">
                            <option> - Bulan - </option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBYear9" class="form-control">
                            <option> - Tahun - </option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>                            
                          </select>
                          </div>

                       <label class="control-label">Lama Cuti (hanya angka)</label>
                            <input name="lamacuti9" id="lamacuti9" type="text" class="form-control"/>
                      </div>
                      </div>

                      <div class="form-group" id="grpnip10">
                      <hr>
                       <label class="control-label" for="NIP10">Masukkan NIP</label>
                            <input name="NIP10" placeholder="Masukkan NIP" id="NIP10" type="text" class="form-control"/>
                      <div class="form-group" id="grptanggal10">
                       <label class="control-label">Tanggal Mulai Cuti</label>
                      <br>
                          <div class="col-xs-4">
                          <select name="DOBDay10" class="form-control">
                            <option> - Hari - </option>
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
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBMonth10" class="form-control">
                            <option> - Bulan - </option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                          </select>
                          </div>

                          <div class="col-xs-4">
                          <select name="DOBYear10" class="form-control">
                            <option> - Tahun - </option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>                            
                          </select>
                          </div>

                       <label class="control-label">Lama Cuti (hanya angka)</label>
                            <input name="lamacuti10" id="lamacuti10" type="text" class="form-control"/>
                      </div>
                      </div>



                      <input type="submit" name="btn_result" value="Cetak" class="btn btn-primary" style="float:right" />
                      
                       
                  </form>
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            
          </div>
          <!-- /.box -->
          <!-- /.nav-tabs-custom -->    
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
          <!-- Penjelasan -->

          
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Petunjuk Penggunaan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
              <ol>
                <li>Pilih jenis surat yang akan dibuat</li>
                <li>Masukkan penerima surat</li>
                <li>Tentukan jumlah pegawai yang akan dibuatkan surat</li>
                <li><b>Masukkan NIP pegawai yang akan dibuatkan surat</b></li>
                <li>Klik Cetak</li>
              </ol>
            </div>
            <!-- /.box-body -->
            <div class="col-xs-12 box-footer">
              <ul class="nav nav-pills nav-stacked">
                <li><p>Setelah Anda memilih cetak maka file akan otomatis terunduh melalui browser yang Anda gunakan saat ini.</p></li>
              </ul>
                                        
            </div>
            <!-- /.footer -->
          </div>
          <!-- /.box -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
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
$(function() {
  for(i=1; i<=10; i++){
  $( "#tanggalmulai"+i ).datepicker({dateFormat: 'dd/mm/yy'});
  }

});
</script>

<script>
    for(i=2; i<=10; i++){
      $('#grpnip'+i).hide();
    }

    for(i=1; i<=10; i++){
      $('#grptanggal'+i).hide();
    }

    $('#grpid').hide();


    $('#surat').on('change', function() {

//Butuh Tanggal, NIP 1

      if($(this).val() == "cuti_alasan_penting.odt" || $(this).val()=="cuti_tahunan.odt" || $(this).val()=="ijin_cuti_bersalin.odt" ){
           $('#grptanggal1').show();
      }
//Tidak Butuh Tanggal, NIP Banyak
      else if($(this).val() == "ijin_belajar.odt" || $(this).val()=="seleksi_masuk_perguruan_tinggi.odt" || $(this).val()=="permohonan_pensiun.odt" || $(this).val()=="pengajuan_taspen.odt"  ){

          $('#grpid').show();

          $('#jml_id').on('change', function() {
        if($(this).val() == "1" ) {
          for(i=1; i<=10; i++){
            $('#grptanggal'+i).hide();
          }
            $('#grpnip').show();
       

          for(i=2; i<=10; i++){
            $('#grpnip'+i).hide();
      
          }
        }

        else if($(this).val() == "2" ) {
        for(i=1; i<=10; i++){
            $('#grptanggal'+i).hide();
          }  
        for(i=1; i<=3; i++){
          $('#grpnip'+i).show();
   
        }
        for(i=3; i<=10; i++){
            $('#grpnip'+i).hide();
       
          }

        }

        else if($(this).val() == "3" ) {
          for(i=1; i<=10; i++){
            $('#grptanggal'+i).hide();
          }
            for(i=1; i<=3; i++){
            $('#grpnip'+i).show();


          }
          for(i=4; i<=10; i++){
            $('#grpnip'+i).hide();
   
          }

        }
        else if($(this).val() == "4" ) {
          for(i=1; i<=10; i++){
            $('#grptanggal'+i).hide();
          }
            for(i=1; i<=4; i++){
            $('#grpnip'+i).show();
 

          }
          for(i=5; i<=10; i++){
            $('#grpnip'+i).hide();

          }
        }
        else if($(this).val() == "5" ) {
          for(i=1; i<=10; i++){
            $('#grptanggal'+i).hide();
          }
            for(i=1; i<=5; i++){
            $('#grpnip'+i).show();


          }
          for(i=6; i<=10; i++){
            $('#grpnip'+i).hide();

          }
        }
        else if($(this).val() == "6" ) {
            for(i=1; i<=6; i++){
            $('#grpnip'+i).show();

          }
          for(i=7; i<=10; i++){
            $('#grpnip'+i).hide();

          }
        }
        else if($(this).val() == "7" ) {
            for(i=1; i<=7; i++){
            $('#grpnip'+i).show();
          }
          for(i=8; i<=10; i++){
            $('#grpnip'+i).hide();

          }
        }
    else if($(this).val() == "8" ) {
            for(i=1; i<=8; i++){
            $('#grpnip'+i).show();

          }
          for(i=9; i<=10; i++){
            $('#grpnip'+i).hide();

          }

        }
    else if($(this).val() == "9" ) {
            for(i=1; i<=9; i++){
            $('#grpnip'+i).show();

          }
          $('#grpnip10').hide();
        }
    else if($(this).val() == "10" ) {
            for(i=1; i<=10; i++){
            $('#grpnip'+i).show();

          }
        }
      
      });
    }

    //Butuh Tanggal, Banyak NIP
      else if($(this).val() == "cuti_haji.odt" || $(this).val()=="cuti_besar.odt" || $(this).val()=="cuti_umroh.odt" ){

        $('#grpid').show();

        $('#grptanggal1').show();
          
          $('#jml_id').on('change', function() {
        if($(this).val() == "1" ) {
            $('#grpnip').show();
            $('#grptanggal1').show();

          for(i=2; i<=10; i++){
            $('#grpnip'+i).hide();
            $('#grptanggal'+i).hide();
          }
        }

        else if($(this).val() == "2" ) {
        for(i=1; i<=3; i++){
          $('#grpnip'+i).show();
          $('#grptanggal'+i).show();
        }
        for(i=3; i<=10; i++){
            $('#grpnip'+i).hide();
            $('#grptanggal'+i).hide();
          }

        }

    else if($(this).val() == "3" ) {
            for(i=1; i<=3; i++){
            $('#grpnip'+i).show();
            $('#grptanggal'+i).show();

          }
          for(i=4; i<=10; i++){
            $('#grpnip'+i).hide();
            $('#grptanggal'+i).hide();
          }

        }
    else if($(this).val() == "4" ) {
            for(i=1; i<=4; i++){
            $('#grpnip'+i).show();
            $('#grptanggal'+i).show();

          }
          for(i=5; i<=10; i++){
            $('#grpnip'+i).hide();
            $('#grptanggal'+i).hide();
          }
        }
    else if($(this).val() == "5" ) {
            for(i=1; i<=5; i++){
            $('#grpnip'+i).show();
            $('#grptanggal'+i).show();

          }
          for(i=6; i<=10; i++){
            $('#grpnip'+i).hide();
            $('#grptanggal'+i).hide();
          }
        }
    else if($(this).val() == "6" ) {
            for(i=1; i<=6; i++){
            $('#grpnip'+i).show();
            $('#grptanggal'+i).show();
          }
          for(i=7; i<=10; i++){
            $('#grpnip'+i).hide();
            $('#grptanggal'+i).hide();
          }
        }
        else if($(this).val() == "7" ) {
            for(i=1; i<=7; i++){
            $('#grpnip'+i).show();
          }
          for(i=8; i<=10; i++){
            $('#grpnip'+i).hide();
            $('#grptanggal'+i).hide();
          }
        }
    else if($(this).val() == "8" ) {
            for(i=1; i<=8; i++){
            $('#grpnip'+i).show();
            $('#grptanggal'+i).show();
          }
          for(i=9; i<=10; i++){
            $('#grpnip'+i).hide();
            $('#grptanggal'+i).hide();
          }

        }
    else if($(this).val() == "9" ) {
            for(i=1; i<=9; i++){
            $('#grpnip'+i).show();
            $('#grptanggal'+i).show();
          }
          $('#grpnip10').hide();
          $('#grptanggal10').hide();
        }
    else if($(this).val() == "10" ) {
            for(i=1; i<=10; i++){
            $('#grpnip'+i).show();
            $('#grptanggal'+i).show();
          }
        }
      });



      }

else{
    $('#grptanggal1').show();
    $('#grpid').hide();
  for(i=2; i<=10; i++){

    $('#grpnip'+i).hide();
  }
}
    });
</script>
@show