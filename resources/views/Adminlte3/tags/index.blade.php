@extends('adminlte::page')


@section('title', 'Etiqueta')

  
@section('content_header')

<a class="btn btn-secondary float-right" href="{{route('adminlte3.tags.create')}}">Nueva Etiqueta</a>

    <h1>Mostrar Listado de Etiquetas</h1>

@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{(session('info'))}}</strong>
    </div>
@endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td width="10px">
                            <a href="{{route('adminlte3.tags.edit',$tag)}}" class="btn btn-primary">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('adminlte3.tags.destroy',$tag)}}" method="POST" >
                               @csrf
                                @method('delete')
                                <button class="btn btn-danger" widch="10px" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
