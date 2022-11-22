<!DOCTYPE html>
<html lang="en">

<head>
  <title>GYMCORE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
  <link href="{{ asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{ asset('css/style2.css') }}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo"><img src="{{ asset ('img/lOGO-GYMCORE.png') }}" alt=""></div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Inicio</a></li>
                <li><a href="#section-heading" class="nav-link">Cuidados</a></li>
                <li><a href="#classes-section" class="nav-link">Clases</a></li>
                <li><a href="#schedule-section" class="nav-link">Rutinas</a></li>
                <li><a href="#trainer-section" class="nav-link">Comentarios</a></li>
                <li><a href="/Contacto" class="nav-link">Contacto</a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
          </div>

        </div>
      </div>

    </header>

    <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=w-cRWOjlk8c',showYTLogo:false, showAnnotations: false, showControls: false, cc_load_policy: false, containment:'#home-section',autoPlay:true, mute:true, startAt:255, stopAt: 271, opacity:1}">
    </a>

    <div class="intro-section" id="home-section" style="background-color: #ccc;">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
            <h1 class="mb-3">Conoce lo que necesitas</h1>
            <p class="lead mx-auto desc mb-5">Control, Gestion de Rutinas y Maquinas</p>
            <p class="text-center">
              <a href="/login" class="btn btn-outline-white py-3 px-5">Inicia Sesión</a>
            </p>
          </div>
        </div>

      </div>
    </div>


    <div class="site-section" id="section-heading">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8 section-heading">
            <h2 class="heading mb-3">Funcion</h2>
            <p>Este software esta enfocado en apoyar en la parte logistica del gimnasio cumpliendo con los modulos de rutinas del entrenador y tambien con el de reportes hacia las maquinas</p>
          </div>
        </div>

        <!-- Slider -->
        <div class="owl-carousel nonloop-block-14 block-14" data-aos="fade">
          <div class="slide">
            <div class="ftco-feature-1">
              <span class="icon flaticon-fit"></span>
              <div class="ftco-feature-1-text">
                <h2>Se Fit</h2>
                <p>¿Quieres mas motivos? solo entrena</p>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="ftco-feature-1">
              <span class="icon flaticon-gym-1"></span>
              <div class="ftco-feature-1-text">
                <h2>Realiza ejercicio</h2>
                <p>el ejercicio regular te ayuda a prevenir el exceso de peso, tener un vientre más plano o incluso puede ayudarte a mantener la pérdida de peso. Considera el hecho de que cuando realizas una actividad física, quemas calorías.</p>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="ftco-feature-1">
              <span class="icon flaticon-gym"></span>
              <div class="ftco-feature-1-text">
                <h2>Gimnasio</h2>
                <p>Desconectar del ajetreado día a día es muy importante para combatir el estrés, e ir al gimnasio es una buena estrategia para conseguirlo. Te ayudará al relajamiento tanto mental como físico, en definitiva, te hará sentir mejor.</p>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="ftco-feature-1">
              <span class="icon flaticon-vegetables"></span>
              <div class="ftco-feature-1-text">
                <h2>Come vegetales y frutas</h2>
                <p>Todos sabemos las bondades de las frutas y vegetales y lo saludables que son. Estos alimentos proporcionan un sin número de vitaminas y minerales, además de fibra que es ideal para mantener una digestión normal.</p>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="ftco-feature-1">
              <span class="icon flaticon-fruit-juice"></span>
              <div class="ftco-feature-1-text">
                <h2>Jugos de frutas</h2>
                <p>Los jugos de frutas son los mejores ayudantes en infinidades de problemas, son bebidas saludables que nos pueden ayudar en nuestro organismo.</p>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="ftco-feature-1">
              <span class="icon flaticon-stationary-bike"></span>
              <div class="ftco-feature-1-text">
                <h2>Realiza cardio</h2>
                <p>El cardio ayuda a quemar muchas calorías, acelera nuestro metabolismo y mejora nuestro Índice de Masa Corporal. Realizar ejercicios cardio de forma regular nos ayudará a mantener nuestro peso ideal. Ayuda a controlar la presión arterial y fortalece el sistema inmunológico</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="bgimg" style="background-image: url('../img/bg_2.jpg');" data-stellar-background-ratio="0.5">

      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h2 class="">Obtenga el resultado que desea</h2>
            <p class="lead mx-auto desc mb-5">- Los obstáculos no tienen que frenarte. Si te encuentras con una pared, no das la vuelta y abandonas. Encuentras la manera de subir a ella, pasar a través de ella o rodearla. - Michael Jordan <a href="/login">Inicia Sesión</a></p>
          </div>
        </div>
      </div>

    </div>

    <div class="site-section" id="classes-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8  section-heading">
            <h2 class="heading mb-3">Clases</h2>
            <p>Tenemos algunas clases para nuestros clientes las cuales incluyen a instructor que enseñara de forma practica, algunas de nuestras clases son:</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{ asset('img/img_1.jpg') }}" alt="Image">
              </a>
              <div class="class-item-text">

                <h2><a href="single.html">Clase de zumba</a></h2>
                <span>De Felix Garcia</span>,
                <span>30 minutos</span>
              </div>
            </div>

            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{asset('img/img_2.jpg')}}" alt="Image">
              </a>
              <div class="class-item-text">

                <h2><a href="single.html">Clase de cardio fit</a></h2>
                <span>De Alexis Guerrero</span>,
                <span>Intervalos de 15 minutos</span>
              </div>
            </div>

            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{ asset('img/img_3.jpg') }}" alt="Image">
              </a>
              <div class="class-item-text">

                <h2><a href="single.html">Clase de Cardio Fit</a></h2>
                <span>De felix Garcia</span>,
                <span>Intervalos de 15 minutos</span>
              </div>
            </div>

            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{asset('img/img_4.jpg') }}" alt="Image">
              </a>
              <div class="class-item-text">

                <h2><a href="single.html">Clase de salsa</a></h2>
                <span>De Alexis Guerrero</span>,
                <span>30 minutos</span>
              </div>
            </div>

            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{asset('img/img_1.jpg')}}" alt="Image">
              </a>
              <div class="class-item-text">

                <h2><a href="single.html">Clase de cardio hit</a></h2>
                <span>De Felix Garcia</span>,
                <span>Intervalos de 15 minutos</span>
              </div>
            </div>


          </div>
          <div class="col-lg-6">
            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{ asset('img/img_1.jpg') }}" alt="Image">
              </a>
              <div class="class-item-text">

                <h2><a href="single.html">Clase de zumba</a></h2>
                <span>De Felix Garcia</span>,
                <span>30 minutos</span>
              </div>
            </div>

            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{asset('img/img_2.jpg')}}" alt="Image">
              </a>
              <div class="class-item-text">

                <h2><a href="single.html">Clase de cardio fit</a></h2>
                <span>De Alexis Guerrero</span>,
                <span>Intervalos de 15 minutos</span>
              </div>
            </div>

            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{ asset('img/img_3.jpg') }}" alt="Image">
              </a>
              <div class="class-item-text">

                <h2><a href="single.html">Clase de Cardio Fit</a></h2>
                <span>De felix Garcia</span>,
                <span>Intervalos de 15 minutos</span>
              </div>
            </div>

            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{asset('img/img_4.jpg') }}" alt="Image">
              </a>
              <div class="class-item-text">

                <h2><a href="single.html">Clase de salsa</a></h2>
                <span>De Alexis Guerrero</span>,
                <span>30 minutos</span>
              </div>
            </div>

            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{asset('img/img_1.jpg')}}" alt="Image">
              </a>
              <div class="class-item-text">

                <h2><a href="single.html">Clase de cardio hit</a></h2>
                <span>De Felix Garcia</span>,
                <span>Intervalos de 15 minutos</span>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="bgimg" style="background-image: url('img/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h2 class="">Basta de excusas</h2>
            <p class="lead mx-auto desc mb-5">- Aunque nadie puede volver atrás y hacer un nuevo comienzo, cualquiera puede comenzar a partir de ahora y crear un nuevo final. - Carl Bard
              <a href="/login">Inicia Sesión</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="schedule-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8  section-heading">
            <h2 class="heading mb-3">Rutinas</h2>
            <p>- Los campeones no están hechos en el gimnasio. Los campeones están hechos de algo que tienen en su interior, un deseo, un sueño, una visión. - Muhammad Ali.</p>
          </div>
        </div>

        <div class="bgimg" style="background-image: url('img/bg_1.jpg');" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center justify-content-center text-center">
              <div class="col-md-7">
                <h2 class="">Revisa tus rutinas</h2>
                <p class="lead mx-auto desc mb-5">Usuario inicia sesion y revisa tus rutinas actuales y antiguas con los ejercicios destinados a el musculo a entrenar solo <a href="#" target="_blank">Inicia Sesion</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="site-section" id="trainer-section">
          <div class="container">
            <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
              <div class="col-md-8  section-heading">
                <h2 class="heading mb-3">Comentarios</h2>
                <p>Estos son algunos de nuestros clientes los cuales nos han brindado su opinion, su comentario acerca de nuestro gimnasio, esperando poder causar ese sentimiento energico de poder entrenar</p>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="">
                <div class="person">
                  <img src="img/person_1.jpg" alt="Image" class="img-fluid">
                  <h3>Santiago duarte</h3>
                  <p class="position">Cliente</p>
                  <p>Es un gimnasio muy acogedor con entrenadores que nos ayudan en los ejercicios , explicandonos el paso a paso y el porque de este, recomendado.</p>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="person">
                  <img src="img/person_3.jpg" alt="Image" class="img-fluid">
                  <h3>Alejandra Pelaez</h3>
                  <p class="position">Cliente</p>
                  <p>Cuando empeze a entrenar en world fitness pesaba 82 kilos y un porcentaje alto de masa corporal, en tan solo 3 meses de entrenamiento logre bajar 10 kilos, algo fenomenal.</p>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="person">
                  <img src="img/person_2.jpg" alt="Image" class="img-fluid">
                  <h3>Felix</h3>
                  <p class="position">Entrenador</p>
                  <p>LLevo varios años siendo el entrenador del gimnasio, es un placer para mi poder brindarles el conocimiento que tengo, corregiendo a cada uno en lo que se permite, no olviden entrenar.</p>
                </div>
              </div>
              <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="person">
                  <img src="img/person_4.jpg" alt="Image" class="img-fluid">
                  <h3>Maria gutierrez</h3>
                  <p class="position">Trainer</p>
                  <p>Es un gimansio que tiene lo necesario para poder entrenar bien, tiene maquinas para cada grupo muscular, y un ambiente acogedor </p>
                </div>
              </div>

            </div>
          </div>
        </div>


        <footer class="footer-section" id="footer-section">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h3 class="text-dark">Sobre GYMCORE</h3>
                <p>Software enfocado en el manejo de rutinas y el control de las maquinas</p>
                <div class="footer-social">
                  <a href=""><i class="fa-brands fa-facebook"></i></a>
                  <a href="">Twitter<i class="fab fa-twitter"></i></a>
                  <a href="">Instagram<i class="fab fa-instagram"></i></a>
                  <a href="">TikTok<i class="fab fa-tiktok"></i></a>

                </div>
              </div>


              <div class="col-md-3 ml-auto">
                <h3 class="text-dark">Links</h3>
                <ul class="list-unstyled footer-links">
                  <li><a href="#">Inicio</a></li>
                  <li><a href="#">Cuidados</a></li>
                  <li><a href="#">Clases</a></li>
                  <li><a href="#">Rutinas</a></li>
                  <li><a href="#">Trainer</a></li>
                  <li><a href="#">Trainer</a></li>

                </ul>
              </div>

            </div>

            <div class="row pt-5 mt-5 text-center">
              <div class="col-md-12">
                <div class=" pt-5">
                  <p class="copyright">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                      document.write(new Date().getFullYear());
                    </script> GYMCORE
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </p>
                </div>
              </div>

            </div>
          </div>
        </footer>

      </div>
      <!-- .site-wrap -->

      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/jquery.countdown.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <script src="js/jquery.sticky.js"></script>
      <script src="js/jquery.mb.YTPlayer.min.js"></script>


      <script src="js/main.js"></script>

</body>

</html>