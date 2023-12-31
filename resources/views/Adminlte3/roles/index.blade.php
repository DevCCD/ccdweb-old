@extends('adminlte::page')


@section('title', 'Post')


@section('content_header')
     <a class="btn btn-secondary float-right" href="{{route('adminlte3.roles.create')}}">Nuevo Rol</a>
    <h1>Lista de Roles</h1>
@stop

@section('content')
    @if(session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th colspan="2  "></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role )
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td width="10px">
                            <a href="{{route('adminlte3.roles.edit',$role)}}" class="btn btn-primary">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('adminlte3.roles.destroy',$role)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
