@extends('layouts.general')

@section('content')

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8" >
        <ul class="list-inline custom-Nosotros">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link"  data-aos="fade-right" data-aos-duration="2000">Nosotros</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten" data-aos="fade-left" data-aos-duration="2000">Somos una institución cuyo fin es promover el desarrollo sostenible del país en base al principio de la competitividad
        y de esta forma mejorar la calidad de vida de los ciudadanos.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- about -->
<section class="section">
  <div class="container">
    <div class="row">
  
      <div class="col-6">
        <h2 class="section-title" data-aos="fade-up" data-aos-duration="2000">Sobre nuestro trabajo</h2>
        <p data-aos="fade-right" data-aos-duration="2000">En Centro para la Competitividad y el Desarrollo (CCD) nos distinguimos por ser una institución en donde tenemos como objetivo promover la competitividad y el desarrollo del país a través del diseño y el apoyo en la implementación y gestión de políticas públicas.
        También trabajamos lo relacionado con la atención de la agenda social, medioambiental y promoción de la inversión privada.</p>
        <p data-aos="fade-right" data-aos-duration="2000">El Centro para la Competitividad y el Desarrollo nos enfocamos en la prestación de servicios las cuales comprenden los siguientes:</p>
        <ul data-aos="fade-right" data-aos-duration="2000">
          <li type="disc">Servicio de Competitividad y Desarrollo</li>
          <li type="disc">Políticas y administración pública</li>
          <li type="disc">Estudios Económicos</li>
          <li type="disc">Inversión</li>
          <li type="disc">Leyes</li>
          {{-- <li type="disc">CCD Tech</li> --}}
        </ul>
        <br>
        <p data-aos="fade-right" data-aos-duration="2000">Disponemos de un equipo conformado por profesionales con larga trayectoria en el sector público y con amplia experiencia en el diseño e implementación de políticas públicas.</p>
      </div>  
      <div class="col-6" data-aos="fade-left" data-aos-duration="2000">
      <img class="img-fluid w-100 mb-4 zoom-out" src="images/images/img_workplace.jpg" alt="about image"  style="padding-top: 100px" >
    </div>
    </div>
  
    </div>
  </div>
</section>
<!-- /about -->

<!-- funfacts -->

-->

<!-- success story -->
<section class="section bg-cover" data-background="images/backgrounds/office-2.jpg" data-aos="fade-up" data-aos-duration="2000">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
        <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5">
          <h2 class="section-title">Un poco sobre Nosotros</h2>
          <p>En Centro para la Competitividad y el Desarrollo (CCD) nos distinguimos por ser una institución en donde tenemos como objetivo promover la competitividad y el desarrollo del país a través del diseño y el apoyo en la implementación y gestión de políticas públicas.</p>
          <p>Disponemos de un equipo conformado por profesionales con larga trayectoria en el sector público y con amplia experiencia en el diseño e implementación de políticas públicas.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->

  <!-- /teachers -->

  @endsection
