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
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Sunting Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="active treeview-menu">
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
@overwrite

@extends('getData')

@section('content.getData')
<h3>Tambah Data Pegawai</h3>
<hr/>
{!! Form::open(['url' => 'getData/employees']) !!}
    <!-- include is used for render partial view errors/form_error.blade.php and books/form.blade.php -->
    @include('errors.form_error')
    @include('books.form', ['submitTextButton' => 'Tambah'])
  
 {!! Form::close() !!}

@stop