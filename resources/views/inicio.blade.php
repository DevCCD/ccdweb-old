@extends('layouts.general')

@section('content')
    
<!-- hero slider -->
<div class="hero-slider">
  <!-- slider item -->
  <div class="hero-slider-item">
    <section class="hero-section overlay bg-cover" data-background="images/banner/banner-1.jpg">
      <div class="container">

        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">{{__('paginaprincipal.Centro para la competitividad y el desarrollo')}}</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">{{__('paginaprincipal.El centro para la Competitividad y el Desarrollo (CCD)')}}</p>

            <!--
        <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>-->

            <a href="{{route('servicios')}}" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">
             {{__('paginaprincipal.Ver Mas')}}</a>

          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- slider item -->
  <div class="hero-slider-item">
    <section class="hero-section overlay bg-cover" data-background="{{asset('images/banner/banner-4.jpg')}}">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">{{__('paginaprincipal.Fomentando el desarrollo en los lugares más alejados')}}</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">{{__('paginaprincipal.El centro para la Competitividad y el Desarrollo (CCD)')}}</p>
            <a href="{{route('servicios')}}" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">{{__('paginaprincipal.Ver Mas')}}</a>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- slider item -->
  <div class="hero-slider-item">
    <section class="hero-section overlay bg-cover" data-background="images/banner/banner-5.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">{{__('paginaprincipal.Gestionando proyectos de desarrollo efectivamente')}}</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">{{__('paginaprincipal.El centro para la Competitividad y el Desarrollo (CCD)')}}</p>
            <a href="{{route('servicios')}}" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">{{__('paginaprincipal.Ver Mas')}}</a>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="hero-slider-item">
    <section class="hero-section overlay bg-cover" data-background="images/banner/banner-3.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">{{__('paginaprincipal.Llevando a cabo estudios económicos en el país')}}</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">{{__('paginaprincipal.El centro para la Competitividad y el Desarrollo (CCD)')}}</p>
            <a href="{{route('servicios')}}" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">{{__('paginaprincipal.Ver Mas')}}</a>
          </div>
        </div>
      </div>
  </div>
  </section>
  </section>
</div>
{{-- contadores --}}
<div class="counterframe">
  <div class="container counter">
    <div class="col-3 countercard">
      <div class="cardvalue">300+</div>
      <div class="carddesc">Localidades y Comunidades</div>
    </div>
    <div class="col-3 countercard">
      <div class="cardvalue">200+</div>
      <div class="carddesc">Distritos</div>
    </div><div class="col-3 countercard">
      <div class="cardvalue">18+</div>
      <div class="carddesc">Regiones</div>
    </div>
    <div class="col-3 countercard" style="border:none!important;">
      <div class="cardvalue">20+</div>
      <div class="carddesc">Países</div>
    </div>
  </div>
</div>

<!-- about us -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title" data-aos="fade-down" data-aos-duration="2000">{{__('inicio.Nosotros')}}</h2>
        <div data-aos="fade-right">
          <p align="justify-content-center">{{__('paginaprincipal.Nosotros1_img')}}</p>
        <p>{{__('paginaprincipal.Nosotros2_img')}}</p>
        <a href="{{route('nosotros')}}" class="btn btn-primary-outline">{{__('paginaprincipal.Ver Mas')}}</a>
        </div>
        
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <div class="overflow-hidden" data-aos="fade-left" data-aos-duration="2000">
          <img class="img-fluid w-100 zoom-out" src="images/fotos2021/trabajo.png" alt="about image">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /about us -->

<!-- courses -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3" data-aos="fade-up" data-aos-duration="2000">{{__('paginaprincipal.Nuestros Servicios')}}</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <!-- courses 
          <div>
            <a href="{{route('servicios')}}" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block" data-aos="fade-left">Ver todos</a>
          </div>
        -->
        </div>
      </div>
    </div>
    <!-- course list -->
    <div class="row justify-content-center">
      <!-- course item -->

      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card h-100 p-0 border-primary rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <div class="overflow-hidden" style="height: 200px">
          <img class="card-img-top rounded-0 zoom-out" src="images/services/srv_competitividad.jpg" alt="course thumb">
          </div>
          <div class="card-body">
            <div class="d-flex flex-column justify-content-between">
              <a href="{{asset('servicios/servicio_competitividad')}}">
                <h4 class="card-title">{{__('inicio.Desarrollo y Competividad')}}</h4>
              </a>
              <p class="card-text mb-4">{{__('paginaprincipal.DYC')}}</p>
                <a href="{{asset('servicios/competitividad_desarrollo')}}" class="btn btn-primary btn-sm">{{__('paginaprincipal.Detalles')}}</a>
            </div>
          </div>
        </div>
      </div>


      <!-- course item -->

      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card h-100 p-0 border-primary rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <div class="overflow-hidden" style="height: 200px">
          <img class="card-img-top rounded-0 zoom-out" src="images/services/srv_politicas.jpg" alt="course thumb">
          </div>
          <div class="card-body">

        <div class="d-flex flex-column justify-content-between">
            <a href="{{asset('servicios/gestion_politica')}}">
              <h4 class="card-title">{{__('inicio.Politica y Gestion Publica')}}</h4>
            </a>
            <p class="card-text mb-4">{{__('paginaprincipal.PYG')}}</p>
              <a href="{{asset('servicios/gestion_politica')}}" class="btn btn-primary btn-sm">{{__('paginaprincipal.Detalles')}}</a>
          </div>
        </div>
        </div>
      </div>
      
      <!-- CAMBIAR IMAGEN TAMAÑO IGUAL PARA TODOS LOS ITEMSS -->

      <!-- course item -->

      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card h-100 p-0 border-primary rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <div class="overflow-hidden" style="height: 200px">
            <img class="card-img-top rounded-0 zoom-out" src="images/services/srv_estudios.jpg" alt="course thumb">
          </div>
          <div class="card-body">
      
        <div class="d-flex flex-column justify-content-between">
            <a href="{{asset('servicios/estudios_economicos')}}">
              <h4 class="card-title">{{__('inicio. Estudios Economicos')}}</h4>
            </a>
            <p class="card-text mb-4"> {{__('paginaprincipal.EC')}}</p>

            <a href="{{asset('servicios/estudios_economicos')}}" class="btn btn-primary btn-sm">{{__('paginaprincipal.Detalles')}}</a>
          </div>
        </div>
      </div>
      </div>

      <!-- course item -->
      <div class="col-lg-6 col-sm-6 mb-5">
        <div class="card h-100 p-0 border-primary rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <img class="card-img-top rounded-0" src="images/services/srv_inversion.jpg" alt="course thumb">
          <div class="card-body">
         
        <div class="d-flex flex-column justify-content-between">
            <a href="{{asset('servicios/inversion')}}">
              <h4 class="card-title">{{__('inicio.Inversiones')}}</h4>
            </a>
            <p class="card-text mb-4">{{__('paginaprincipal.Inver')}} </p>
            <a href="{{asset('servicios/inversion')}}" class="btn btn-primary btn-sm">{{__('paginaprincipal.Detalles')}}</a>
          </div>
          </div>
        </div>
      </div>
      <!-- course item -->
      <div class="col-lg-6 col-sm-6 mb-5">
        <div class="card h-100 p-0 border-primary rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <img class="card-img-top rounded-0" src="images/services/srv_leyes3.jpg" alt="course thumb">
          <div class="card-body">
        <div class="d-flex flex-column justify-content-between">
            <a href="{{asset('servicios/legal')}}">
              <h4 class="card-title">{{__('inicio.Legal')}}</h4>
            </a>
            <p class="card-text mb-4"> {{__('paginaprincipal.letxt')}}</p>
            <br>
            <br>
            <br>
            <a href="{{asset('servicios/legal')}}" class="btn btn-primary btn-sm">{{__('paginaprincipal.Detalles')}}</a>
          </div>
        </div>
        </div>
      </div>


      {{-- <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card h-100 p-0 border-primary rounded-0 hover-shadow" data-aos="fade-up" data-aos-duration="2000">
          <img class="card-img-top rounded-0" src="images/services/srv_tech.jpg" alt="course thumb">
          <div class="card-body">
           <div class="d-flex flex-column justify-content-between">
            <a href="{{asset('servicios/tech')}}">
              <h4 class="card-title">{{__('inicio. CCD TECH')}}</h4>
            </a>
            <p class="card-text mb-4">{{__('paginaprincipal.TECH')}} </p>
            <a href="{{asset('servicios/tech')}}" class="btn btn-primary btn-sm">{{__('paginaprincipal.Detalles')}}</a>
          </div>
        </div>
        </div>
      </div> --}}
    </div>

    <!-- /course list -->
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="courses.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /courses -->

<!-- cta -->
<section class="section bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h6 class="text-white font-secondary mb-0"  data-aos="fade-right" data-aos-duration="2000">{{__('paginaprincipal.Expertos en el desarrollo y competitividad')}}</h6>
        <h2 class="section-title text-white"  data-aos="fade-left" data-aos-duration="2000"> {{__('paginaprincipal.Únete a Nosotros y vive la experiencia')}}</h2>
        <a href="{{route('contacto')}}" class="btn btn-secondary"  data-aos="fade-up" data-aos-duration="2000">{{__('paginaprincipal.Con!')}}</a>
      </div>
    </div>
  </div>
</section>
<!-- /cta -->

<!-- success story -->
<section class="section bg-cover" data-background="images/backgrounds/office-2.jpg">
  <div class="container">
    <div class="row" data-aos="fade-right" data-aos-duration="2000">
      <div class="col-lg-6 col-sm-4 position-relative success-video" data-aos="fade-right" data-aos-duration="2000" >
        <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video" data-aos="fade-right" data-aos-duration="2000">
          <i class="ti-control-play"data-aos="fade-right" data-aos-duration="2000"></i>
        </a>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5" data-aos="fade-left" data-aos-duration="2000">
          <h2 class="section-title" >{{__('inicio.Nosotros')}}</h2>
          <p>{{__('paginaprincipal.textvideo')}}</p>
          <p>{{__('paginaprincipal.textvideo2')}}</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->

<!-- teachers esta parte conforma el equipo de trabajo de cdd -->
<!-- -->

@endsection
