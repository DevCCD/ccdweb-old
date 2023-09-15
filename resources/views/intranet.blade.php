@extends('.layouts/intranetlayout')

@section('content')

  <div id="my-sidebar-context" class="widget-sidebar-context">
      <header id="this-header" class="navbar justify-content-start  align-items-center  page-header">

          <a href="#" class="navbar-toggler widget-sidebar-toggler">
              <i> <img src="{{asset('images/logos/ic_menu2.png')}}"  alt="" height="30px" width="auto"> </i>
          </a>

          <center>
            <a class="">
              <img src="{{asset('images/banner/logoccd.png')}}" alt="" width="320px" height= relative style="margin-top:15px; margin-bottom:15px;">
            </a>
          </center>



      </header>
      <div class="page-body">
          <nav class="widget-sidebar">
              <ul class="list-unstyled mt-2">
                  <li class="active">
                      <a href="intranet">
                          <img src="../images/logos/ic_home.png" style="width:20px; height:20px; margin-right:5px;"><span> Inicio </span>
                      </a>
                  </li>
                  <li class="active">
                      <a href="{{route('archivos')}}">
                          <i class="fas fa-pencil-alt"></i><span>Archivos</span>
                      </a>
                  </li>
                  <li class="active">
                    <a href="intranet">
                        <i class="fas fa-pencil-alt"></i><span>Videos</span>
                    </a>
                </li>
                <li class="active">
                    <a href="intranet">
                        <i class="fas fa-pencil-alt"></i><span>Banco de Fotos</span>
                    </a>
                </li>
                <li class="active">
                    <a href="intranet">
                        <i class="fas fa-pencil-alt"></i><span>Agenda</span>
                    </a>
                </li>
                  <li class="active">
                      <form id="logout-form" action="{{route('logout')}}" method="post">
                        @csrf
                      </form>
                      <a href="#" onclick="document.getElementById('logout-form').submit()">
                          <img src="../images/logos/ic_logout.png" style="width:25px; height:25px; margin-right:5px;"></i><span>Salir</span>
                      </a>
                  </li>


                  <!--
                  <li>
                      <a href="#sidebar-link-mycomponents" data-toggle="collapse"
                         aria-expanded="true"
                         class="dropdown-toggle">
                          <i class="fas fa-shapes"></i><span> Proyectos </span>
                      </a>
                      <ul class="collapse list-unstyled show"
                          id="sidebar-link-mycomponents">
                          <li>
                              <a href="#">Alerts</a>
                          </li>
                      </ul>
                  </li>-->
              </ul>
          </nav>

<!--
          <div class="page-main border-top">-->



          <div class="page-main" style="text-align:center;padding-top:150px">
    
                <H1 align-text=center>BIENVENIDOS A NUESTRO PORTAL </H1>
             
            




          </div>
<!-- </div> -->



      </div>
@endsection
