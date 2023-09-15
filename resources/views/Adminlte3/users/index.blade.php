@extends('adminlte::page')


@section('title', 'Usuarios')


@section('content_header')
<a class="btn btn-secondary float-right" href="{{route('adminlte3.users.create')}}">Nuevo Usuario</a>
   
    <h1>Listado de Usuarios</h1>
@stop

@section('content')
 @livewire('admin.users-index')
@stop
