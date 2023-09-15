@extends('adminlte::page')


@section('title', 'Posts')


@section('content_header')
    <h1>Editar Rol</h1>
 
      </li>
@stop
@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{(session('info'))}}</strong>
    </div>
@endif  
    <div class="card">
        <div class="card-body">
          {!! Form::model($role, ['route'=>['adminlte3.roles.update',$role],'method'=>'put']) !!}
          @include('Adminlte3.roles.partials.form')
          {!! Form::submit('Editar rol', ['class'=>'btn btn-primary']) !!}
          {!! Form::close() !!}
       
        </div>
    </div>
@stop


