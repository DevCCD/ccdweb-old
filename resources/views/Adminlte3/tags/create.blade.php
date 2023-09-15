@extends('adminlte::page')


@section('title', 'Etiqueta')


@section('content_header')
    <h1>Crear Etiqueta</h1>
 
      </li>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'adminlte3.tags.store']) !!}
            @include('Adminlte3.tags.partials.form')
              
            {!! Form::submit('Crear Etiqueta', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
@section('js')

<script scr={{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}></script>

<script>
    $(document).ready( function() {
      $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
      });
    }); 
</script>
@endsection

