@extends('layouts.general')

@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <ul class="list-inline custom-Nosotros">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Mesa de Partes</a></li>
            <li class="list-inline-item text-white h3 font-secondary nasted">Ventanilla Electrónica</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <br>
  <section class="section bg-gray">
    <div class="container">
      @if(session()->has('success'))
      <div class="alert alert-success">{{session('success')}}</div>
      @endif
      <div class="row">
        <div class="col-12 ">
          <form action="{{route('store2')}}"  method="POST" enctype="multipart/form-data">
            @csrf
            <label for="validationServer01">Nombres y Apellidos (Obligatorio)</label>
            <input type="text" class="form-control mb-3 is valid" id="name" name="name" placeholder="Nombre" required>

            <div class="form-group">
                <label for="validationServer01">Correo Electrónico (Obligatorio)</label>
                <input type="email" class="form-control is valid" id="mail" name="mail"placeholder="name@example.com" required>
              </div>
              <label for="validationServer01">DNI</label>
            <input type="text" class="form-control mb-3 "  required pattern="[0-9 ]{8}" title="Debe poner 8 numeros al DNI" id="DNI" name="DNI" placeholder="Ingrese DNI" >
            <label for="validationServer01">Celular</label>
            <input type="text" class="form-control mb-3 is valid" id="Celular" name="Celular" placeholder="Ingrese Celular" required>
              <label for="validationServer01">Asunto</label>
            <input type="text" class="form-control mb-3 is valid" id="subject" name="subject" placeholder="Asunto" required>
            
            <div class="form-group">
                <label for="validationTextarea">Mensaje</label>
                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                <div class="invalid-feedback">
                  Insertar Texto.
                </div>
              </div> 
              <div class="form-group">
                <label for="exampleFormControlFile1">Adjuntar documentos PDF, JPEG, JPG, DOCX, DOC, PPTX, XLSX</label>
                <input type="file" class="form-control-file" name="file"id="file" name="file" required>
                <div class="invalid-feedback">Ingresar Archivo </div>" 
              </div>
          
              <div class="mt-4 form-group">
              <button type="submit" value="send" class="btn btn-primary text-center">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>