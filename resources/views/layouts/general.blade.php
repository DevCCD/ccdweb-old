<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Centro para la Competitividad y el Desarrollo</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
  <!-- FontAWESOME -->
  <script src="https://kit.fontawesome.com/6dc1873447.js"></script>
  <!-- animation css -->
  <link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
  <!-- aos -->
  <link rel="stylesheet" href="{{asset('plugins/aos/aos.css')}}">
  <!-- venobox popup -->
  <link rel="stylesheet" href="{{asset('plugins/venobox/venobox.css')}}">
  <!--BOTMAN-->
 <!-- Main Stylesheet -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/custom.css')}}" rel="stylesheet">
  <link href="{{asset('css/font.css')}}" rel="stylesheet">
  <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset('/images/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('/images/favicon.ico')}}" type="image/x-icon">

</head>
<body>
<!-- header -->
<header class="fixed-top header">

  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="{{route('inicio')}}"><img class="" src="{{asset('images/banner/logoccd.png')}}"
          alt="logo" height="50px" width="90%"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="{{route('nosotros')}}" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                {{__('inicio.Nosotros')}}
              </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('nosotros')}}">{{__('inicio.Nosotros')}}</a>
               
                <a class="dropdown-item" href="{{route('experiencia')}}">{{__('inicio.Experiencia')}}</a>
              </div>
            
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="{{route('servicios')}}" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">{{__('inicio.Nuestro Trabajo')}}
          </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('servicio_competitividad')}}">{{__('inicio.Desarrollo y Competividad')}}</a>
              <a class="dropdown-item" href="{{route('servicio_gestion')}}">{{__('inicio.Politica y Gestion Publica')}}</a>
              <a class="dropdown-item" href="{{route('servicio_estudios')}}">{{__('inicio. Estudios Economicos')}}</a>
              <a class="dropdown-item" href="{{route('servicio_inversiones')}}">{{__('inicio.Inversiones')}}</a>
              <a class="dropdown-item" href="{{route('servicio_legal')}}">{{__('inicio.Legal')}}</a>
              <a class="dropdown-item" style="display: none;" href="{{route('servicio_tech')}}">{{__('inicio. CCD TECH')}}</a>
            </div>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                {{__('inicio.Publicaciones')}}
              </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('posts.index')}}">{{__('inicio.Blog')}}</a>
              </div>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="{{route('contacto')}}" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">{{__('inicio.Contacto')}}
              
              </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('contacto')}}">{{__('inicio.Contáctenos')}}</a>
                <a class="dropdown-item" href="{{route('empleos')}}">{{__('inicio.Trabaja Con Nosotros')}}</a>
                {{-- <a class="dropdown-item" href="{{route('mesadeparte')}}">{{__('inicio.Mesa de Parte')}}</a> --}}
              </div>
      </li>
            
          </ul> 
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- SECTION-->

@yield('content')

<!-- footer -->
<footer>
  <section class="section pt-02">
    <div class="container">
      <div class="row" >
        <div class="col-12 text-center">
            <h2  class="section-title">{{__('inicio.Contáctenos')}}</h2>
        </div>
        <div class="col-12 col-md-6 col-lg-6 text-center" data-aos="zoom-in" data-aos-duration="2000">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.3980751269282!2d-77.0381458313835!3d-12.107173433007969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c840cbc1f651%3A0xe32c9c6c2f00e30b!2sAv.%20Pardo%20y%20Aliaga%20699%2C%20San%20Isidro%2015073!5e0!3m2!1ses!2spe!4v1672160814266!5m2!1ses!2spe" 
          width=100% height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-12 col-md-6 col-lg-6" data-aos="flip-left" data-aos-duration="2000">
          <ul class="list-unstyled">

            <li class="mb-4 letra1">
              <a class="text-color letra1" href="https://goo.gl/maps/opa4MWF4P7NTudCQ9">
                <i class="fas fa-map-marked-alt"></i> San Isidro, Lima - Perú
              </a>
            </li>

            <li class="mb-4 letra1">
              <a class="text-color letra1" href="https://api.whatsapp.com/send?phone=51922753771">
                <i class="fab fa-whatsapp">
                  </i> +51 922 753 771
              </a>
            </li>

            <li class="mb-4 letra1">
              <a class="text-color letra1" href="mailto:melissa.sanchez@competitividadccd.com">
                <i class="far fa-envelope"></i> melissa.sanchez@competitividadccd.com
              </a>
            </li>

          </ul>
        </div>
      </div>

    </div>
  </section>
  
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container"> 
      <div class="row">
        <!-- company -->
        <div class="col-12 col-md-4 col-sm-4">
          <h4 class="text-white mb-0">{{__('inicio.CENTRO')}}</h4>
          <ul class="list-unstyled">
            <li class="mb-4"><a class="text-color letra" href="{{route('nosotros')}}">{{__('inicio.Nosotros')}}</a></li>
            <li class="mb-4"><a class="text-color letra" href="{{route('servicios')}}">{{__('inicio.Servicios')}}</a></li>
            <li class="mb-4"><a class="text-color letra" href="{{route('experiencia')}}">{{__('inicio.Experiencia')}}</a></li>
            <!--
            <li class="mb-3"><a class="text-color" href="blog.html">Blog</a></li>-->
          </ul>
        </div>
        <!-- support -->

        <div class="col-12 col-md-4 col-sm-4">
          <h4 class="text-white mb-5">{{__('inicio.Contacto')}}</h4>
          <ul class="list-unstyled">
            <li class="mb-4"><a class="text-color letra" href="{{route('contacto')}}">{{__('inicio.Contáctenos')}}</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-12 col-md-4 col-sm-4">
          <h4 class="text-white mb-5">{{__('inicio.REDES SOCIALES')}}</h4>
          <ul class="align-center">
            <li class="redes"><a class="text-color redes" href="https://web.facebook.com/Centro-para-la-Competitividad-y-el-Desarrollo-CCD-151040740434523"><i class="fab fa-facebook-square"></i></a></li>
         
            <li class="redes"><a class="text-color redes" href="https://api.whatsapp.com/send?phone=51922753771"><i class="fab fa-whatsapp-square"></i></a></li>
          
            <li class="redes"><a class="text-color redes" href="https://www.linkedin.com/in/centro-para-la-competitividad-y-el-desarrollo-434799214/"><i class="fab fa-linkedin"></i></a></li>
          
            <li class="redes"><a class="text-color redes" href="mailto:melissa.sanchez@competitividadccd.com"><i class="fas fa-envelope-square"></i></a></li>
          </ul>
          
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->

</footer>
<!-- /footer 
<div class="social-container">
  
  <li><a href="#" role="button" class="social-button fb"><i class="fab fa-facebook-square"></i></a></li>
  <li><a href="#" role="button" class="social-button wa"><i class="fab fa-whatsapp-square"></i></a></li>
 
</div>-->
<div class="social">
  <ul>
   
    <li><a href="https://web.facebook.com/Centro-para-la-Competitividad-y-el-Desarrollo-CCD-151040740434523" target="_blank" class="fa-facebook-fa-square"><i class="fab fa-facebook-square"></i></a></li>
    
    <li><a href="https://api.whatsapp.com/send?phone=51922753771" target="_blank" class="fa-whatsapp-wa"><i class="fab fa-whatsapp"></i></a></li>
  
    <li><a href="https://www.linkedin.com/in/centro-para-la-competitividad-y-el-desarrollo-434799214/" target="_blank" class="fa-linkedin-inn"><i class="fab fa-linkedin-in"></i></a></li>
    
    <li><a href="mailto:administracion@ccdcompetitividad.com" target="_blank" class="fa-envelope-em"><i class="fas fa-envelope"></i></a></li>
  </ul>
</div>


<!-- jQuery -->
<script src="{{asset('plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{asset('plugins/slick/slick.min.js')}}"></script>
<!-- aos -->
<script src="{{asset('plugins/aos/aos.js')}}"></script>
<!-- venobox popup -->
<script src="{{asset('plugins/venobox/venobox.min.js')}}"></script>
<!-- mixitup filter -->
<script src="{{asset('plugins/mixitup/mixitup.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>
<!--CHATBOT-->
<!--<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>-->
<!-- Main Script -->
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>


</body>
</html>
