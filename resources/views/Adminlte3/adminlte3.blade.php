@extends('adminlte::page')


@section('title', 'Dashboard')


@section('content_header')
    <h1>CCD ADMINISTRADOR</h1>
 
      </li>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Bienvenidos</h1>
        </div>
        <div class="card-body"></div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> Swal.fire(
        'Bienvenidos',
        'Centro para la Competitividad y Desarrollo',
        'success'
      )</script>
@stop