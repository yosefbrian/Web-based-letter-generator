@extends('layouts.app')

@section('head.style')
<link href="{{ URL::asset('css/bootstrap-select.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/jquery-ui-1.10.0.custom.css') }}" rel="stylesheet">
@show

@section('page.location')
<li class="active">Lihat Data</li>
@endsection




@section('side.content')
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="{{ url('/') }}">
            <i class="fa fa-envelope-o"></i>
            <span>Buat Surat</span>
          </a>
        </li>
        <li class="active treeview">
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
            <li class="active"><a href="{{ url('getData/employees/create') }}"><i class="fa fa-circle-o"></i>Tambah Data Manual</a></li>
          </ul>
          <ul class="treeview-menu">
            <li class="active"><a href="#" data-toggle="modal" data-target="#modalimport"><i class="fa fa-circle-o"></i>Upload Data Excel</a></li>
          </ul>
          <ul class="treeview-menu">
            <li class="active"><a href="{{URL::route('admin.users.export')}}"><i class="fa fa-circle-o"></i>Download Data Excel</a></li>
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

@if(Session::has('flash_message'))
<div class="box-body">
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close btn-round" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>

    {{ Session::get('flash_message') }}
</div>
</div>
@endif


@if(Session::has('error'))

<div class="alert alert-danger alert-dismissible col-xs-12" role="alert">
  <button type="button" class="close btn-round col-xs-1" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>

  {{ Session::get('error') }}
</div>
@endif


<!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row"> 
                <div class="col-xs-12">
                 
                  @yield('content.getData')
                  
                </div>
                
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            
          </div>
          <!-- /.box -->
          <!-- /.nav-tabs-custom -->    
        </section>
        <!-- /.Left col -->
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
@show