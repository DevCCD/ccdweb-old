@extends('adminlte::page')


@section('title', 'Usuarios')


@section('content_header')
    <h1>Crear Usuario</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>'adminlte3.users.store']) !!}
    
            <div class="form-group">
                {!! Form::label('name','Nombre:') !!}
                {!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre del Usuario']) !!}
                
                @error('name')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            
            </div>
            <div class="form-group">
                {!! Form::label('email','Email:') !!}
              {!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'Ingrese el Correo del Usuario']) !!}
                @error('email')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            
            </div>
            <div class="form-group">
                {!! Form::label('password','Contraseña:') !!}
               {!! Form::password('password', ['class'=>'form-control','placeholder'=>'Ingrese su Contraseña']) !!}
                @error('password')
                <small class="text-danger">{{$message}}</small>
            @enderror
            </div>
          
        {!! Form::submit('Crear Usuario', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop
