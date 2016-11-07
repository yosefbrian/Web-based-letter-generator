@extends('layouts.app')

@section('head.style')
<link href="{{ URL::asset('css/bootstrap-select.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/jquery-ui-1.10.0.custom.css') }}" rel="stylesheet">
@show

@section('side.content')
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="{{ url('/') }}">
            <i class="fa fa-envelope-o"></i>
            <span>Buat Surat</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{ url('/getData') }}">
            <i class="fa fa-database"></i>
            <span>Lihat Data</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Sunting Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('getData/employees/create') }}"><i class="fa fa-circle-o"></i>Tambah Data Manual</a></li>
          </ul>
          <ul class="treeview-menu">
            <li><a href="#" data-toggle="modal" data-target="#modalimport"><i class="fa fa-circle-o"></i>Upload Data Excel</a></li>
          </ul>
          <ul class="treeview-menu">
            <li><a href="{{URL::route('admin.users.export')}}"><i class="fa fa-circle-o"></i>Download Data Excel</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="{{url('/log')}}">
            <i class="fa fa-files-o"></i>
            <span>Log</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="{{url('/cms')}}">
            <i class="fa fa-file-text"></i>
            <span>Template</span>
          </a>
        </li>
      </ul>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
          <div class="panel-body">
            <br>
            <form action="{{ url('/cms/search') }}" method="get" enctype="multipart/form-data">
                    <div class="col-xs-3 pull-left">
                      <input class="form-control"  type="text" name="search" id="search" placeholder="cari.." >
                      <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
                    </div>
                    <button type="submit" class="btn btn-default pull-left" value="Cari"><span class="fa fa-search"></span></button>
                  </form>
                  <div class="col-xs-12" ><a data-placement="bottom" href="#" title="Tambah" class="btn btn-default btn-fill" style="float:right; margin-top:-5px" data-toggle="modal" data-target="#modalimport2">Tambah Template</a>
                    <div class="modal fade" id="modalimport2" tabindex="-1" role="dialog">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">  
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title"><b>Unggah Template Baru</b></h4>
                          </div>
                          <div class="modal-body">
                            <div class="col-xs-12">
                              <form action="{{ url('/cms/tambah') }}" method="post" enctype="multipart/form-data">
                                
                                <div>
                                Nama Surat <br>
                                  <input class="form-control" type="text" name="nama_surat" required="required">
                                </div>
                                <div>
                                <br>
                                  Upload File
                                  <div>
                                  <input type="file" class="btn btn-default btn-sm btn-file" name="fileToUpload" id="fileToUpload" required="required">
                                </div><br>
                                  <br>
                                </div>
                                <div style="float:right;">
                                  <input type="submit" class="btn btn-success" value="Upload" name="submit">
                                  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                  <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                                </div>
                            </form>
                            </div>
                          </div>
                          <div class="modal-footer">
                          </div>
                      </div>
                    </div>
                  </div>


                  <div>
                  @if ($surat->count())
                    <table class="table table-striped">
                      <thead>
                          <tr>
                              <th>Id</th>
                              <th>Nama Surat</th>
                              <th>File Name</th>
                              <th>Waktu Unggah</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>

                      <tbody>
                        <?php $i=0; ?>
                        @foreach ($surat as $surati)
                        <?php $i++; ?>
                        <tr>
                          <td>{{ $surati->id }}</td>
                          <td>{{ $surati->nama_surat }}</td>
                          <td>{{ $surati->filename }}</td>
                          <td>{{ $surati->updated_at }}</td>
                          <td><a class="btn btn-warning" data-placement="bottom" title="Update Template" data-toggle="modal" href="#" data-target="#modalupdate"><span class="glyphicon glyphicon-pencil"></a><a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete<?php echo $surati->id;?>"><span class="glyphicon glyphicon-trash"></a></td>

                            <div class="modal fade" id="modalupdate" tabindex="-1" role="dialog">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">  
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Unggah Template Baru</b></h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="col-xs-12">
                                      <form action="{{ url('/cms/update', $surati->id) }}" method="post" enctype="multipart/form-data">
                                         <div>
                                Nama Surat <br>
                                  <input class="form-control" type="text" name="nama_surat" required="required">
                                </div>
                                <div>
                                <br>
                                  Upload File
                                  <div>

                                  <input type="file" class="btn btn-default btn-sm btn-file" name="fileToUpload" id="fileToUpload" required="required">
                                </div><br>
                                  <br>
                                </div>
                                        <div style="float:right;">
                                          <input type="submit" class="btn btn-success" value="Upload" name="submit">
                                          <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                                        </div>
                                    </form>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div>

                          <div class="modal fade" id="modaldelete<?php echo $surati->id;?>" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-sm" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Perhatian</b></h4>
                                </div>
                                
                                <div class="modal-body">
                                  <input type="hidden" value="<?php echo $surati->id;?>" name="id">
                                  <h5>Apakah Anda yakin akan menghapus data ini?</h5>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                                  <div class="divider"></div>
                                  <a class="btn btn-danger btn-simple" title="Hapus" href="{{ action('templateController@delete', $surati->id) }}">Hapus</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  <center>
                    {!!$surat->render()!!}
                  </center>
                  @else
                    Belum ada template surat
                  @endif
                
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
@show