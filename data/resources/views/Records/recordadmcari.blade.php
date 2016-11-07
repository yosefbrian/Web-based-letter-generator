@extends('layouts.app')

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
        <li class="active treeview">
          <a href="{{url('/log')}}">
            <i class="fa fa-files-o"></i>
            <span>Log</span>
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

                        <form action="{{ url('/logcari') }}" method="get">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                            <input class="form-control pull-left" type="text" name="mhs" id="mhs" placeholder="cari.." style="width: 200px; height:30px; margin-top: 2px;margin-right:10px"></input>
                            <input class="btn btn-default pull-left" type="submit" value="Cari" ></input>
                        </form>

                        <br>
                        <br>
                        <br>
                        <br>
                        <table class="table table-striped">
                            <tr>
                               <th>Nama</th>
                                <th>Nama Surat</th>
                                <th>No Surat</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                            </tr>

                            @foreach($result as $recor)
                                <tr>
                                     <td>{{$recor->nama}}</td>
                                    <td>{{$recor->nama_surat}}</td>
                                    <td>{{$recor->no_surat}}</td>
                                    <td>{{$recor->keterangan}}</td>
                                    <td>{{$recor->status}}</td>
                                    <td>{{$recor->created_at}}</td>
                                     <td><a class="btn btn-warning" data-placement="bottom" title="Update Template" data-toggle="modal" href="#" data-target="#modalupdate<?php echo $recor->id;?>"><span class="glyphicon glyphicon-pencil"></a></td>
                                </tr>

                                  <div class="modal fade" id="modalupdate<?php echo $recor->id;?>" tabindex="-1" role="dialog">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">  
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Update</b></h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="col-xs-12">
                                      <form action="{{ url('/log/update', $recor->id) }}" method="post" enctype="multipart/form-data">
                                         
                                <div>
                                <br>
                                Status
                                <div>
                                  <select class="form-control"  required="required" name="stat1" title="Status">
                                    <option value="Processing">Processing</option>
                                    <option value="Selesai">Selesai</option>
                                     <option value="Ditolak">Ditolak</option>
                                  </select>
                                  </div>
                                  <br>
                                  
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

                            @endforeach
                        </table>


                        {!!$result->appends(Request::only('mhs'))->render()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection