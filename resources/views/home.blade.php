<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ibras</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset(bootstrap/css/bootstrap.min.css)}}" rel="stylesheet">
  <link href="{{ asset(assets/vendor/icofont/icofont.min.css)}}" rel="stylesheet">
  <link href="{{(assets/vendor/animate.css/animate.min.css)}}" rel="stylesheet">
  <link href="{{(assets/vendor/font-awesome/css/font-awesome.min.css)}}" rel="stylesheet">
  <link href="{{(assets/vendor/nivo-slider/css/nivo-slider.css)}}" rel="stylesheet">
  <link href="{{(assets/vendor/owl.carousel/assets/owl.carousel.min.css)}}" rel="stylesheet">
  <link href="{{(assets/vendor/venobox/venobox.css)}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/ibras.css') }}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><img src="images/ibras_logo.png" alt="ibras-logo" class="logo-ibras img-responsive"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="home.html">INICIO</a></li>
          <li><a href="aboutUs.html">SOBRE NOSOTROS</a></li>
          <li><a href="menu.html">MENU</a></li>
          <li><a href="http://srujanameher.uta.cloud/">BLOG</a></li>
          <li><a href="contact.html">CONTACTO</a></li>
          <li><a href="registration.html">REGISTRO</a></li>
          <li><a href="login.html">INICIAR SESION</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- ======= Slider Section ======= -->
  <div id="home" class="slider-area">
      <div id="ensign-nivoslider" class="slides">
        <img src="images/hamburguesa2.jpg" alt="ibras-logo" class="logo-ibras img-responsive" title="#slider-direction-1" />
      </div>
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <div class="layer-1-1 hidden-xs">
                  <h2 class="title1">LAS MEJORES DE LA CIUDAD</h2>
                </div>
                <div class="layer-1-2">
                  <h1 class="title2">Hamburguesas</h1>
                </div>
                <div class="layer-1-3 hidden-xs">
                  <a class="ready-btn right-btn page-scroll" href="#services">VER MENÚ HOY</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Slider -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <img src="images/Burguer.png" alt="burger icon" class="burger-icon"><br>
              <h2>Nuestra historia</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                  <img src="images/story1.png" alt="story1 image" class="story1">
              </div>
              <div class="story1-text">
                <p>Los orígenes se remontan al 10 de junio de 1960, cuando Ibrahim Mata compraron la
                  Hamburgueseria “Soy Yo” con una inversión inicial de 950 dólares. El local estaba situado
                  en Lecheria, y la idea de Ibrahim era vender Hamburguesas a domicilio a las personas de las
                  residencias cercanas. Aquella experiencia no marchaba como tenían previsto.</p>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <img src="images/story2.png" alt="story2 image" class="story2">
              </div>
              <div class="story2-text">
                <p>A pesar de todo, Ibrahim se mantuvo al frente del restaurante y tomó decisiones importantes
                  para su futuro, como reducir la carta de productos y establecer un reparto a domicilio gratuito.
                  Después de adquirir dos restaurantes más en Barcelona, en 1965 renombró sus tres locales como
                  Ibra's Burger Grill.</p>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <div class="our-service-area fix hidden-sm">
      <div class="test-overly-services"></div>
    <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <img src="images/Burguer.png" alt="burger icon" class="burger-icon"><br>
              <h2>Las más vendidos</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <img src="images/burguer1.png" alt="burgers" class="burguer1">
                  </a>
                  <h4>Mixta</h4>
                  <p>
                    $11.90<br>
                    <button class="button1">Ordenar ahora</button>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <img src="images/burguer2.png" alt="burgers" class="burguer1">
                  </a>
                  <h4>Pollo</h4>
                  <p>
                    $11.90<br>
                    <button class="button1">Ordenar ahora</button>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <img src="images/burguer4.png" alt="burgers" class="burguer2"></div>
                  </a>
                  <h4>Carne</h4>
                  <p>
                    $11.90<br>
                    <button class="button1">Ordenar ahora</button>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <img src="images/burguer1.png" alt="burgers" class="burguer4">
                  </a>
                  <h4>Mixta</h4>
                  <p>
                    $11.90<br>
                    <button class="button1">Ordenar ahora</button>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          </div>
          <div class="row text-center">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <img src="images/burguer1.png" alt="burgers" class="burguer1">
                  </a>
                  <h4>Mixta</h4>
                  <p>
                    $11.90<br>
                    <button class="button1">Ordenar ahora</button>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <img src="images/burguer1.png" alt="burgers" class="burguer1">
                  </a>
                  <h4>Mixta</h4>
                  <p>
                    $11.90<br>
                    <button class="button1">Ordenar ahora</button>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <img src="images/burguer1.png" alt="burgers" class="burguer1">
                  </a>
                  <h4>Mixta</h4>
                  <p>
                    $11.90<br>
                    <button class="button1">Ordenar ahora</button>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <img src="images/burguer1.png" alt="burgers" class="burguer1">
                  </a>
                  <h4>Mixta</h4>
                  <p>
                    $11.90<br>
                    <button class="button1">Ordenar ahora</button>
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Services Section -->

    <!-- ======= Skills Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <img src="images/Burguer.png" alt="burger icon" class="burger-icon"><br>
              <h2>Nuestra Menu</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="container">
            <ul class="nav nav-tabs" role="tablist">
<li class="nav-item">
  <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">profile</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">buzz</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="#references" role="tab" data-toggle="tab">references</a>
</li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
<div role="tabpanel" class="tab-pane fade in active" id="profile">...</div>
<div role="tabpanel" class="tab-pane fade" id="buzz">bbb</div>
<div role="tabpanel" class="tab-pane fade" id="references">ccc</div>
</div>
        </div>
        </div>
      </div>
    </div><!-- End About Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <img src="images/ibras_logo.png" alt="ibras-logo" class="logo-ibras-menu">
          <section class="footer_content">
            <p><a href="#" >Habla a:</a><br>
            Av. Intercomunal, sector la Mora, calle 8</p>
            <p><a href="#" >Telefono:</a><br>
            +58 251 261 00 01</p>
            <p><a href="#" >Correo:</a><br>
            yourmail@gmail.com</p>
            <p>
              <ul class="social-icons">
                <li><img src="images/pinterest.png">
                <li><img src="images/facebook.png">
                <li><img src="images/twitter.png">
                <li><img src="images/dribbble.png">
                <li><img src="images/linkedin.png">
                <li><img src="images/vimeo.png">
              </ul>
            </p><br>
            <!-- <div class="container">
              <div class="col-md-12 col-sm-12 col-xs-12"> -->
            <p class="footer_end">Copyright &copy; Todos los derechos reservados | Este sitio esta hecho con &hearts; por DiazApps</p>
          <!-- </div></div> -->
        </section>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p class="footer_end">Copyright &copy; Todos los derechos reservados | Este sitio esta hecho con &hearts; por DiazApps</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/appear/jquery.appear.js"></script>
  <script src="assets/vendor/knob/jquery.knob.js"></script>
  <script src="assets/vendor/parallax/parallax.js"></script>
  <script src="assets/vendor/wow/wow.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
