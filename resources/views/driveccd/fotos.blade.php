@extends('adminlte::page')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.css" integrity="sha512-7uSoC3grlnRktCWoO4LjHMjotq8gf9XDFQerPuaph+cqR7JC9XKGdvN+UwZMC14aAaBDItdRj3DcSDs4kMWUgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')

<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Banco de Fotos</h1>
        
        

    </div>
    <h5 class="modal-title" id="exampleModalLabel">Agrega foto</h5>
   
    <div>
        <form action="{{route('files.store1')}}" method="post" class="dropzone" id="my-awesome-dropzone"></form>
       
    </div>
    {{--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="{{route('files.store1')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                     
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input name="foto" type="file" class="custom-file-input" id="inputGroupFile02"
                                    aria-describedby="inputGroupFileAddon01" accept="image/*">
                                <label class="custom-file-label" for="inputGroupFile02">Buscar</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>--}}
    <div class="mt-4 row">
        @foreach ($fotos as $foto)
        <div class="mt-2 col-md-4">
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="h-100 d-flex flex-column justify-content-center align-items-center">
                            <img src="{{asset('img.jpg')}}" class="img-fluid">
                            <p class="text-muted small mb-0">{{$foto->get_size()}}</p>
                      
                    <div class="col-md-2">
                        <div class="px-2 py-1">
                            <h6 class="card-title">{{$foto->name}}</h6>
                            <div class="d-flex justify-content-between">
                                <p class="text-muted small">{{$foto->user->name}} </p>
                                <p class="text-muted small">{{$foto->created_at->format('d/m/Y')}}</p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{route('files.download1',$foto)}}" class="btn btn-primary btn-sm mr-1">Descargar</a>
                                <form action="{{route('files.destroy1',$foto)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
</div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            bsCustomFileInput.init()
        })
    </script>
@endpush

@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
<script> 
Dropzone.options.myAwesomeDropzone = {
   
        header:{
            'X-CSRF-TOKEN ': "{{csrf_token()}}"
        },
    }
  };</script>
@endsection