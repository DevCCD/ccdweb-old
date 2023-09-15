@extends('adminlte::page')


@section('title', 'Etiqueta')


@section('content_header')
    <h1>Editar Etiqueta</h1>
@stop


@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{(session('info'))}}</strong>
    </div>
@endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($tag, ['route'=> ['adminlte3.tags.update',$tag],'method'=>'put']) !!}
            @include('Adminlte3.tags.partials.form')
            {!! Form::submit('Actualizar Etiqueta', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

