<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <title>Ibras</title>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
  <link href="{{ asset('css/ibras.css') }}" rel="stylesheet"/>
  <script type="text/javascript" src="js/main.js"></script>
</head>

<body>
  <div class="login-page">
    <div class="bg-image">
      <div class="image-shader-main">
        <div class="image-shader zig-zag-bottom">

          <!-- <div class="triangle-down"></div> -->
        </div>
        <!-- <div class="logo-ibras"></div> -->
        <img src="images/ibras_logo.png" alt="ibras-logo" class="logo-ibras">
        <div class="menu-ibras">
          <ul>
          <li><a href="{{url('home')}}">INICIO</a></li>
            <li><a href="aboutUs.html">SOBRE NOSOTROS</a></li>
            <li><a href="menu.html">MENU</a></li>
            <li><a href="blog.html">BLOG</a></li>
            <li><a href="{{url('contactus')}}">CONTACTO</a></li>
            <li><a href="{{url('register')}}" id='active_Link'>REGISTRO</a></li>
            <li><a href="login.html">INICIAR SESION</a></li>
          </ul>
        </div>

        <div class="main-text-over-image">
          <h4 class="description-sub-1">LAS MEJORES DE LA CIUDAD</h4>
          <h1>Hamburguesas</h1>
          <button class="main-button">VER MENÚ HOY</button>
        </div>

      </div>
       
    </div>

    <div class="our-history zig-zag-top">
      <br><br>
      <img src="images/Burguer.png" alt="burger icon" class="burger-icon">
      <h3 class="description-sub-2">Nuestra historia</h3>
      <!-- <br><br><br><br> -->

      <img src="images/story1.png" alt="story1 image" class="story1">

      <div class="story1-text">
        <p>Los orígenes se remontan al 10 de junio de 1960, cuando Ibrahim Mata compraron la
          Hamburgueseria “Soy Yo” con una inversión inicial de 950 dólares. El local estaba situado
          en Lecheria, y la idea de Ibrahim era vender Hamburguesas a domicilio a las personas de las
          residencias cercanas. Aquella experiencia no marchaba como tenían previsto.</p>
      </div>

      <img src="images/story2.png" alt="story2 image" class="story2">
      <div class="story2-text">
        <p>A pesar de todo, Ibrahim se mantuvo al frente del restaurante y tomó decisiones importantes
          para su futuro, como reducir la carta de productos y establecer un reparto a domicilio gratuito.
          Después de adquirir dos restaurantes más en Barcelona, en 1965 renombró sus tres locales como
          Ibra's Burger Grill.</p>
      </div>
      <br><br><br><br><br><br><br>

      <div class="bestsellers">
        <div class="image-shader-bestsellers">
          <img src="images/Burguer.png" alt="burger icon" class="burger-icon-bestsellers">
          <h3 class="description-sub-2">Las más vendidos</h3>


          <div class="grid-container">
            <div class="grid-item-1"><span class="ribbon-1 ribbon">OFERTA</span><img src="images/burguer1.png" alt="burgers" class="burguer1"></div>
            <div class="grid-item-2"><img src="images/burguer2.png" alt="burgers" class="burguer2"></div>
            <div class="grid-item-3"><img src="images/burguer4.png" alt="burgers" class="burguer4"></div>
            <div class="grid-item-4"><span class="ribbon-2 ribbon">ESPECIALIDAD</span><img src="images/burguer1.png" alt="burgers" class="burguer1"></div>
            <div class="grid-item-5"><span class="text1">Mixta</div>
            <div class="grid-item-6"><span class="text2">Pollo</div>
            <div class="grid-item-7"><span class="text3">Carne</div>
            <div class="grid-item-8"><span class="text4">Mixta</div>
            <div class="grid-item-9"><span class="text5">$11.90</div>
            <div class="grid-item-10"><span class="text6">$11.90</div>
            <div class="grid-item-11"><span class="text7">$11.90</div>
            <div class="grid-item-12"><span class="text8">$11.90</div>
            <div class="grid-item-13"><button class="button1">Ordenar ahora</button></div>
            <div class="grid-item-14"><button class="button1">Ordenar ahora</button></div>
            <div class="grid-item-15"><button class="button1">Ordenar ahora</button></div>
            <div class="grid-item-16"><button class="button1">Ordenar ahora</button></div>
          </div>


          <div class="grid-container-2">
            <div class="grid-item-1"><img src="images/burguer2.png" alt="burgers" class="burguer2"></div>
            <div class="grid-item-2"><span class="ribbon-3 ribbon">OFERTA</span><img src="images/burguer4.png" alt="burgers" class="burguer4"></div>
            <div class="grid-item-3"><span class="ribbon-4 ribbon">TALLA EXTRA</span><img src="images/burguer1.png" alt="burgers" class="burguer1"></div>
            <div class="grid-item-4"><img src="images/burguer2.png" alt="burgers" class="burguer2"></div>
            <div class="grid-item-5"><span class="text1">Mixta</div>
            <div class="grid-item-6"><span class="text2">Pollo</div>
            <div class="grid-item-7"><span class="text3">Carne</div>
            <div class="grid-item-8"><span class="text4">Pollo</div>
            <div class="grid-item-9"><span class="text5">$11.90</div>
            <div class="grid-item-10"><span class="text6">$11.90</div>
            <div class="grid-item-11"><span class="text7">$11.90</div>
            <div class="grid-item-12"><span class="text8">$11.90</div>
            <div class="grid-item-13"><button class="button1">Ordenar ahora</button></div>
            <div class="grid-item-14"><button class="button1">Ordenar ahora</button></div>
            <div class="grid-item-15"><button class="button1">Ordenar ahora</button></div>
            <div class="grid-item-16"><button class="button1">Ordenar ahora</button></div>
            <button class="main-button-menu">VER MENÚ HOY</button>
          </div>


        </div>

        <div class="zig-zag-top-tabbedMenu">
          <img src="images/Burguer.png" alt="burger icon" class="burger-icon-bestsellers">
          <h3 class="description-sub-2">Nuestro menú</h3>


          <!-- Tabbed Menu -->
          <main>
            <input id="radio1" type="radio" name="css-tabs" checked>
            <input id="radio2" type="radio" name="css-tabs">
            <input id="radio3" type="radio" name="css-tabs">
            <input id="radio4" type="radio" name="css-tabs">
            <div id="tabs">
              <label id="tab1" for="radio1">TODOS</label>
              <label id="tab2" for="radio2">Pollo</label>
              <label id="tab3" for="radio3">Carne</label>
              <label id="tab4" for="radio4">Mixta</label>
            </div>



            <div id="content" class="grid-container-2-menu">
              <section id="content1">
                <!-- <div class="grid-container-2-menu"> -->
                <div class="grid-item-01"><img src="images/hamburguesa21.jpg" alt="hamburguer" class="hamburguer1"></div>
                <div class="grid-item-02"><span class="text01">Pollo</div>
                <div class="grid-item-03"><span class="price01">$12.00</div>
                <div class="grid-item-04"><img src="images/hamburguesa20.jpg" alt="hamburguer" class="hamburguer2"></div>
                <div class="grid-item-05"><span class="text02">Mixta</div>
                <div class="grid-item-06"><span class="price02">$20.00</div>
                <div class="grid-item-07"><img src="images/hamburguesa18.jpg" alt="hamburguer" class="hamburguer3"></div>
                <div class="grid-item-08"><span class="text03">Carne</div>
                <div class="grid-item-09"><span class="price03">$12.00</div>
                <div class="grid-item-010"><img src="images/hamburguesa16.jpg" alt="hamburguer" class="hamburguer4"></div>
                <div class="grid-item-011"><span class="text04">Pollo</div>
                <div class="grid-item-012"><span class="price04">$6.00</div>
                <div class="grid-item-013"><img src="images/hamburguesa13.jpg" alt="hamburguer" class="hamburguer5"></div>
                <div class="grid-item-014"><span class="text05">De todito</div>
                <div class="grid-item-015"><span class="price05">$12.00</div>
                <div class="grid-item-016"><img src="images/hamburguesa12.jpg" alt="hamburguer" class="hamburguer6"></div>
                <div class="grid-item-017"><span class="text06">Mixta</div>
                <div class="grid-item-018"><span class="price06">$20.00</div>
                <div class="grid-item-019"><img src="images/hamburguesa10.jpg" alt="hamburguer" class="hamburguer7"></div>
                <div class="grid-item-020"><span class="text07">Carne</div>
                <div class="grid-item-021"><span class="price07">$12.00</div>
                <div class="grid-item-022"><img src="images/hamburguesa4.jpg" alt="hamburguer" class="hamburguer8"></div>
                <div class="grid-item-023"><span class="text08">Pollo</div>
                <div class="grid-item-024"><span class="price08">$6.00</div>
                <!-- </div> -->
              </section>

              <section id="content2">
                <!-- <div class="grid-container-2-menu"> -->
                <div class="grid-item-01"><img src="images/hamburguesa21.jpg" alt="hamburguer" class="hamburguer1"></div>
                <div class="grid-item-02"><span class="text01">Pollo</div>
                <div class="grid-item-03"><span class="price01">$12.00</div>
                <div class="grid-item-04"><img src="images/hamburguesa20.jpg" alt="hamburguer" class="hamburguer2"></div>
                <div class="grid-item-05"><span class="text02">Mixta</div>
                <div class="grid-item-06"><span class="price02">$20.00</div>
                <div class="grid-item-07"><img src="images/hamburguesa18.jpg" alt="hamburguer" class="hamburguer3"></div>
                <div class="grid-item-08"><span class="text03">Carne</div>
                <div class="grid-item-09"><span class="price03">$12.00</div>
                <div class="grid-item-010"><img src="images/hamburguesa16.jpg" alt="hamburguer" class="hamburguer4"></div>
                <div class="grid-item-011"><span class="text04">Pollo</div>
                <div class="grid-item-012"><span class="price04">$6.00</div>
                <div class="grid-item-013"><img src="images/hamburguesa13.jpg" alt="hamburguer" class="hamburguer5"></div>
                <div class="grid-item-014"><span class="text05">De todito</div>
                <div class="grid-item-015"><span class="price05">$12.00</div>
                <div class="grid-item-016"><img src="images/hamburguesa12.jpg" alt="hamburguer" class="hamburguer6"></div>
                <div class="grid-item-017"><span class="text06">Mixta</div>
                <div class="grid-item-018"><span class="price06">$20.00</div>
                <div class="grid-item-019"><img src="images/hamburguesa10.jpg" alt="hamburguer" class="hamburguer7"></div>
                <div class="grid-item-020"><span class="text07">Carne</div>
                <div class="grid-item-021"><span class="price07">$12.00</div>
                <div class="grid-item-022"><img src="images/hamburguesa4.jpg" alt="hamburguer" class="hamburguer8"></div>
                <div class="grid-item-023"><span class="text08">Pollo</div>
                <div class="grid-item-024"><span class="price08">$6.00</div>
                <!-- </div> -->
              </section>

              <section id="content3">
                <!-- <div class="grid-container-2-menu"> -->
                <div class="grid-item-01"><img src="images/hamburguesa21.jpg" alt="hamburguer" class="hamburguer1"></div>
                <div class="grid-item-02"><span class="text01">Pollo</div>
                <div class="grid-item-03"><span class="price01">$12.00</div>
                <div class="grid-item-04"><img src="images/hamburguesa20.jpg" alt="hamburguer" class="hamburguer2"></div>
                <div class="grid-item-05"><span class="text02">Mixta</div>
                <div class="grid-item-06"><span class="price02">$20.00</div>
                <div class="grid-item-07"><img src="images/hamburguesa18.jpg" alt="hamburguer" class="hamburguer3"></div>
                <div class="grid-item-08"><span class="text03">Carne</div>
                <div class="grid-item-09"><span class="price03">$12.00</div>
                <div class="grid-item-010"><img src="images/hamburguesa16.jpg" alt="hamburguer" class="hamburguer4"></div>
                <div class="grid-item-011"><span class="text04">Pollo</div>
                <div class="grid-item-012"><span class="price04">$6.00</div>
                <div class="grid-item-013"><img src="images/hamburguesa13.jpg" alt="hamburguer" class="hamburguer5"></div>
                <div class="grid-item-014"><span class="text05">De todito</div>
                <div class="grid-item-015"><span class="price05">$12.00</div>
                <div class="grid-item-016"><img src="images/hamburguesa12.jpg" alt="hamburguer" class="hamburguer6"></div>
                <div class="grid-item-017"><span class="text06">Mixta</div>
                <div class="grid-item-018"><span class="price06">$20.00</div>
                <div class="grid-item-019"><img src="images/hamburguesa10.jpg" alt="hamburguer" class="hamburguer7"></div>
                <div class="grid-item-020"><span class="text07">Carne</div>
                <div class="grid-item-021"><span class="price07">$12.00</div>
                <div class="grid-item-022"><img src="images/hamburguesa4.jpg" alt="hamburguer" class="hamburguer8"></div>
                <div class="grid-item-023"><span class="text08">Pollo</div>
                <div class="grid-item-024"><span class="price08">$6.00</div>
                <!-- </div> -->
              </section>

              <section id="content4">
                <!-- <div class="grid-container-2-menu"> -->
                <div class="grid-item-01"><img src="images/hamburguesa21.jpg" alt="hamburguer" class="hamburguer1"></div>
                <div class="grid-item-02"><span class="text01">Pollo</div>
                <div class="grid-item-03"><span class="price01">$12.00</div>
                <div class="grid-item-04"><img src="images/hamburguesa20.jpg" alt="hamburguer" class="hamburguer2"></div>
                <div class="grid-item-05"><span class="text02">Mixta</div>
                <div class="grid-item-06"><span class="price02">$20.00</div>
                <div class="grid-item-07"><img src="images/hamburguesa18.jpg" alt="hamburguer" class="hamburguer3"></div>
                <div class="grid-item-08"><span class="text03">Carne</div>
                <div class="grid-item-09"><span class="price03">$12.00</div>
                <div class="grid-item-010"><img src="images/hamburguesa16.jpg" alt="hamburguer" class="hamburguer4"></div>
                <div class="grid-item-011"><span class="text04">Pollo</div>
                <div class="grid-item-012"><span class="price04">$6.00</div>
                <div class="grid-item-013"><img src="images/hamburguesa13.jpg" alt="hamburguer" class="hamburguer5"></div>
                <div class="grid-item-014"><span class="text05">De todito</div>
                <div class="grid-item-015"><span class="price05">$12.00</div>
                <div class="grid-item-016"><img src="images/hamburguesa12.jpg" alt="hamburguer" class="hamburguer6"></div>
                <div class="grid-item-017"><span class="text06">Mixta</div>
                <div class="grid-item-018"><span class="price06">$20.00</div>
                <div class="grid-item-019"><img src="images/hamburguesa10.jpg" alt="hamburguer" class="hamburguer7"></div>
                <div class="grid-item-020"><span class="text07">Carne</div>
                <div class="grid-item-021"><span class="price07">$12.00</div>
                <div class="grid-item-022"><img src="images/hamburguesa4.jpg" alt="hamburguer" class="hamburguer8"></div>
                <div class="grid-item-023"><span class="text08">Pollo</div>
                <div class="grid-item-024"><span class="price08">$6.00</div>
                <!-- </div> -->
              </section>
          </main>
        </div>



      </div>
      <div class="footer">
        <div class="bg-image-home-footer">
            <div class="image-shader-main_menu_footer">
              <div class="image-shader-menu zig-zag-bottom_home">
              </div>
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
                <p class="footer_end">Copyright &copy; Todos los derechos reservados | Este sitio esta hecho con &hearts; por DiazApps</p>
              </section>
        </div>
      </div>
      </div>
      </div>

    </div>


      <div class="form register">
        <img src="images/Burguer.png" alt="burger icon" class="burger-icon-register">
        <h3 class="description-sub-2-login">Registro de Usuario</h3>
        <span class="close">&times;</span>
        <br><br><hr>
         @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <form class="login-form" name= "signupForm" onsubmit="return validateSignup()" id="signupForm" action="{{ route('register.store') }}" method="post">
{{csrf_field()}}

        <label for="user" id="registeruser">Nombre y apellido:</label>

              <input type="text" id="userZ" name="u_name" required/>


        <label for="user" id="user">Correo:</label>


            <input type="email" id="emailZ" name="u_email" required/>


        <label for="password" id="password">Contraseña:</label>


            <input type="password" id="passwordZ" name="u_password" required/>


        <label for="password" id="registerpassword">Repetir Contraseña:</label>


              <input type="password" id="repeatPasswordZ" name="repeatPasswordZ" required/>


        <label for="user" id="user">Direccion:</label>


              <input type="textarea" id="addressZ" name="u_address" required/>
        <hr>
       <input type="submit" class="main-button-login user-btn" value="Cargar"/>  <!--<span class="user-btn">Cargar</span></button> -->
      </form>
      </div>
</body>
</html>
