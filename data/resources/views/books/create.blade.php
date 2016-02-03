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