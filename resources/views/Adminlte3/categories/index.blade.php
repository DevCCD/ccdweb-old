@extends('adminlte::page')


@section('title', 'Categoria')


@section('content_header')
    <h1>Lista de Categoria</h1>
 
      </li>
@stop

@section('content')

 @if (session('info'))
     <div class="alert alert-success">
         <strong>{{(session('info'))}}</strong>
     </div>
 @endif
      <div class="card">
          <div class="card-header">
              <a class="btn btn-success" href="{{route('adminlte3.categories.create')}}">Agregar Categoría</a>
          </div>
          <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category )
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td width="10px">
                                <a class="btn btn-primary"  href="{{route('adminlte3.categories.edit',$category)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('adminlte3.categories.destroy', $category)}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
      </div>
@stop

