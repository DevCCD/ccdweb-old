@extends('layouts.general')

@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-Nosotros">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Trabaja con Nosotros</a></li>
            <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
          </ul>
          <p class="text-lighten">¿Buscas oportunidad laboral?,No te preocupes, escribenos un correo dandonos a conocer que quieres uniter a nuestra familia y te responderemos
          lo más antes posible.</p>
        </div>
      </div>
    </div>
  </section>
  ----
  <section class="section bg-gray">
    <div class="container">
      @if(session()->has('success'))
      <div class="alert alert-success">{{session('success')}}</div>
      @endif
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section-title">Postula Aquí</h2>
          <h4 class="section-title text-color black">
            Forma parte de nuestro equipo de colaboradores </h4>
        </div>
      </div>
      <div class="row">
        <div class="col-12 ">
          <form action="{{route('store1')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @csrf
            <label for="validationServer01">Nombres y Apellidos </label>
            <input type="text" class="form-control mb-3 is valid" id="name" name="name" placeholder="Nombre" required>

            <div class="form-group">
                <label for="validationServer01">Correo Electrónico </label>
                <input type="email" class="form-control is valid" id="mail" name="mail" placeholder="name@example.com" required>
              </div>
            
              <div class="form-group">
                <label for="file">Adjuntar documento PDF</label>
                <input type="file" class="form-control-file @error('file') is-invalid @enderror" id="file" name="file" accept=".pdf">
                <div class="invalid-feedback">@error('file') {{$message}} @enderror</div>
              </div>
            <div class="mt-4 form-group">
              <button type="submit" value="send" class="btn btn-primary text-center">Enviar cv</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- /page title -->