@extends('getData')

@section('page.location')
<li class="active">Sunting Data Perorang</li>
@overwrite

@section('content.getData')
<div>
<h3>Perbarui Data Pegawai</h3>
<br>
<!--{!! Form::open(['method' => 'PATCH', 'url' => 'books/' . $book->id]) !!}-->
{!! Form::model($book, ['method' => 'PATCH', 'action' => ['HomeController@update', $book->id] ]) !!}

    @include('errors.form_error')
    @include('books.form', ['submitTextButton' => 'Perbarui'])
    
{!! Form::close() !!}
</div>
@stop