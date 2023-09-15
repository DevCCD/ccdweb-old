@extends('layouts.general')

@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-Nosotros">
          <i class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{route('experiencia')}}">Experiencia</a></i>
          <!-- -->
          <li class="list-inline-item text-white h3 font-secondary nasted">Nacional e Internacional</li>
        </ul>
        <!--
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>-->
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- section -->
<section class="section-sm">
  <div class="container">

    <!-- course info -->
    <div class="row align-items-center mb-5">
      <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
        <h2>Experiencia Nacional</h2>
      </div>

      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 mb-4">
        <div>
          <div class="card-body">
            <div class="row">
              <div class="col-9">

                <figure class="snip0015">
                  <img src="{{asset('images/images/img_mapnac2.jpg')}}" class="img-fluid w-100">
                  <figcaption>
                    <h2 style="color:#890524; font-size:30px">"Centro Para la Competitividad y el Desarrollo"</h2>
                    <h2><span></span></h2>
                    <p style="font-size:30px">"Los mejores profesionales se encuentran aquí."</p>
                    <a></a>
                  </figcaption>
                </figure>

              </div>
              <div class="col-3">

                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">
                        <div class="square"></div>
                      </th>
                      <th scope="col">Experiencia de profesionales</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><div class="circle" id="cd"></div></span></th>
                      <td>Competitividad y Desarrollo</td>

                    </tr>
                    <tr>
                      <th scope="row"><div class="circle" id="pgp"></div></span></th>
                      <td>Política y Gestión Pública</td>

                    </tr>
                    <tr>
                      <th scope="row"><div class="circle" id="ee"></div></span></th>
                      <td>Estudios Económicos</td>

                    </tr>

                    <tr>
                      <th scope="row"><div class="circle" id="in"></div></span></th>
                      <td>Inversiones</td>

                    </tr>

                    <tr>
                      <th scope="row"><div class="circle" id="le"></div></span></th>
                      <td>Legal</td>
                    </tr>
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>
</div>
</section>

<!-- section -->
<section class="section-sm">
  <div class="container">
    <!-- course info -->
    <div class="row align-items-center mb-5">
      <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
        <h2>Experiencia Internacional</h2>
      </div>

      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
      <div class="row">
        <div class="col-12 mb-4">
          <div>
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <figure class="snip0015">
                    <img src="{{asset('images/images/img_mapinter2.jpg')}}" class="img-fluid w-100">
                    <figcaption>
                      <h2 style="color:#890524; font-size:30px">"Centro Para la Competitividad y el Desarrollo"</h2>
                      <h2><span></span></h2>
                      <p style="font-size:30px">"Los mejores profesionales se encuentran aquí."</p>
                      <a href="#"></a>
                    </figcaption>
                  </figure>
                </div>
              <div class="col-3">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">
                        <div class="square"></div>
                      </th>
                      <th scope="col">Experiencia de profesionales</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><div class="circle" id="cd"></div></span></th>
                      <td>Competitividad y Desarrollo</td>

                    </tr>
                    <tr>
                      <th scope="row"><div class="circle" id="pgp"></div></span></th>
                      <td>Política y Gestión Pública</td>

                    </tr>
                    <tr>
                      <th scope="row"><div class="circle" id="ee"></div></span></th>
                      <td>Estudios Económicos</td>

                    </tr>

                    <tr>
                      <th scope="row"><div class="circle" id="in"></div></span></th>
                      <td>Inversiones</td>

                    </tr>

                    <tr>
                      <th scope="row"><div class="circle" id="le"></div></span></th>
                      <td>Legal</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>
