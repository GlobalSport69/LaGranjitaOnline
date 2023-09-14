<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">


  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Slick CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css" />

  <!-- Bootstrap DatePicker CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/main.css" type="text/css">

  <!-- Jquery -->
  <script src="assets/js/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Bootstrap JS -->
  <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/cb9a6efe1a.js" crossorigin="anonymous"></script>
  <!-- Slick JS -->
  <script type="text/javascript" src="assets/js/slick.min.js"></script>

  <!-- Bootstrap DatePicker JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js" charset="UTF-8" integrity="sha512-5pjEAV8mgR98bRTcqwZ3An0MYSOleV04mwwYj2yw+7PBhFVf/0KcE+NEox0XrFiU5+x5t5qidmo5MgBkDD9hEw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- SCRIPTS -->

  <script type="text/javascript" src="assets/js/fetchApi.js" defer></script>
  <script type="text/javascript" src="assets/js/scripts.js"></script>
  <title> ..:: La Granjita Online ::.. </title>
</head>
<!--Un Comentario-->

<body>
  <header class="container" id="inicio">
    <section class="row">
      <nav role="navigation">
        <div id="menuToggle">
          <input type="checkbox" id="burguerCheck" />
          <span></span>
          <span></span>
          <span></span>
          <ul id="menu">
            <a href="javascript:void(0);" onclick="ancla('inicio')">
              <li>INICIO</li>
            </a>
            <a href="javascript:void(0);" onclick="ancla('pronostico')">
              <li>PRONOSTICOS</li>
            </a>
            <a href="javascript:void(0);" id="reglamentos" onclick="ancla('reglamentos')">
              <li>REGLAMENTOS</li>
            </a>
            <a href="javascript:void(0);" onclick="ancla('contactanos')">
              <li>CONTACTANOS</li>
            </a>
            <a href="javascript:void(0);" onclick="ancla('registrate')">
              <li>REGISTRATE</li>
            </a>
          </ul>
        </div>
      </nav>
      <!---->
      <div class="col-lg-3 img-menu"><img src="assets/img/logo.png" alt="Logo_Header" class="img-fluid"></div>
      <div class="col-lg-9 position-relative row p-0 mb-1 title-menu">
        <span class="slogan">El Hogar de los ANIMALITOS</span>
        <span class="alarmImg"></span>
      </div>
    </section>
  </header>
  <div class="lineAqua"></div>
  <!-- Carrusel Resultados Animalitos -->
  <section class="container my-3">
    <div class="row animalslist1">
      <div class="col-lg-8">
        <div class="carouselAnimales">
        </div>
      </div>
    </div>
    <div class="row animalslist2">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="carouselAnimalsSlider carouselResults" style="color: white;"></div>
      </div>
    </div>
  </section>
  <!-- Carrusel Resultados Animalitos -->
  <div class="lineAqua"></div>
  <!-- Seccion 3 -->
  <section class="container my-3 d-flex section3">
    <div class="borderLine"></div>
    <div class="item-70 row">
      <div class="col-sm-12 text-center mb-3"><span class="resultsText">RESULTADOS</span></div>
      <div class="col-sm-12 text-center "><span class="dateResultsFilter">FECHA</span>
        <input type="date" class="dateInput" id="inputSearch" onchange="handler(event);">
      </div>
      <div class="col-sm-4 itemsResultsDay"></div>
    </div>
    <div class="borderLine"></div>
    <div class="lineAqua-responsive"></div>
    <div class="item row d-flex" id="pronostico">
      <article class="col-sm-12 pronostico text-center">
        <p class="pronosticoTitle">PRONOSTICA</p>
        <p class="pronosticoAnimalito">TU ANIMALITO</p>
        <p class="pronosticoSuerte">MUCHA SUERTE</p>
      </article>
      <div class="col-sm-12 pronosticosDiv">
        <img src="assets/img/circulo.png" class="img-fluid" alt="Pronostico">

        <div class="btnLuck d-flex justify-content-center mb-5">
          <button class="custom-btn btn-5" onclick="getNameFiles()">DAME SUERTE</button>
        </div>

        <p class="textWarning">
          ATENCION ESTO ES SOLO UN PRONOSTICO. LA GRANJITA NO SE HACE RESPONSABLE DE LOS RESULTADOS PROPORCIONADOS. LA RULETA ES UN JUEGO 100% DE AZAR. VERIFICADA Y REGULADA POR LAS REGLAS DE ENVITE Y AZAR NACIONALES E INTERNACIONALES.
        </p>
      </div>
    </div>

    <div class="borderLine"></div>
  </section>
  <div class="lineAqua"></div>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-3 img-menu"><img src="https://dryjjfcsfgp14.cloudfront.net/logo terminal-06.png" alt="terminal-logo" class="w-100 img-responsive"></div>
    </div>
  </div>
  <div class="lineAqua"></div>
  <!-- Carrusel Resultados Termianles -->
  <section class="container my-3">
    <div class="row animalslist1">
      <div class="col-lg-8">
        <div class="carouselTerminales">
        </div>
      </div>
    </div>
    <div class="row animalslist2">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="carouselTerminalSlider carouselResults" style="color: white;"></div>
      </div>
    </div>
  </section>
  <!-- Carrusel Resultados Termianles -->
  <div class="lineAqua"></div>
  <!-- Seccion 3 -->
  <section class="container my-3 d-flex section3">
    <div class="borderLine"></div>
    <div class="item-70 row">
      <div class="col-sm-12 text-center mb-3"><span class="resultsText">RESULTADOS</span></div>
      <div class="col-sm-12 text-center "><span class="dateResultsFilter">FECHA</span>
        <input type="date" class="dateInput" id="inputSearch" onchange="handlerTerminal(event);">
      </div>
      <div class="col-sm-4 itemsResultsDayTerminal"></div>
    </div>
    <div class="borderLine"></div>
    <div class="lineAqua-responsive"></div>
    <div class="item row d-flex" id="pronostico">
      <article class="col-sm-12 pronostico text-center">
        <p class="pronosticoTitle">PRONOSTICA</p>
        <p class="pronosticoAnimalito">TU TERMINAL</p>
        <p class="pronosticoSuerte">MUCHA SUERTE</p>
      </article>
      <div class="col-sm-12 pronosticosDivTerminal">
        <img src="assets/img/circulo.png" class="img-fluid" alt="Pronostico">

        <div class="btnLuck d-flex justify-content-center mb-5">
          <button class="custom-btn btn-5" onclick="generateRandomNumber()">DAME SUERTE</button>
        </div>

        <p class="textWarning">
          ATENCION ESTO ES SOLO UN PRONOSTICO. LA GRANJITA NO SE HACE RESPONSABLE DE LOS RESULTADOS PROPORCIONADOS. LA RULETA ES UN JUEGO 100% DE AZAR. VERIFICADA Y REGULADA POR LAS REGLAS DE ENVITE Y AZAR NACIONALES E INTERNACIONALES.
        </p>
      </div>
    </div>
    <div class="borderLine"></div>
  </section>
  <div class="lineAqua"></div>
  <!-- Section 4 -->
  <section class="container my-3 d-flex section3">
    <div class="borderLine"></div>
    <article class="item" id="contactanos">
      <header>
        <p class="titleContact">
          CONTACTANOS
        </p>
      </header>
      <form action="#" method="post" id="form-contact">
        <section class="formContact">
          <div class="mb-3">
            <label for="name" class="form-label formLabel">Nombre & Apellido / Compa&ntilde;ia</label>
            <input type="text" class="form-control formInput" id="name" name="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label formLabel">Correo Electronico</label>
            <input type="email" class="form-control formInput" id="email" name="email">
          </div>
          <div class="mb-3">
            <label for="msg" class="form-label formLabel">Mensaje</label>
            <textarea name="msg" cols="30" rows="5" class="form-control formInput" id="msg"></textarea>
          </div>
          <div class="btnLuck m-0 p-0">
            <button class="custom-btn btn-5 w-100" type="button" id="btn-submit-contact">REGISTRATE</button>
          </div>
        </section>
      </form>
      <div class="d-flex">
        <div class="infoContact">
          <!--<i class="fab fa-facebook-square"></i>-->
          <i rel="noopener noreferrer" onclick="changeLink(`https://www.instagram.com/lagranjitaofic/?hl=es`)" class="fab fa-instagram pointer"></i>
          <i rel="noopener noreferrer" onclick="changeLink(`https://twitter.com/lagranjitaofic?lang=es`)" class="fab fa-twitter-square pointer"></i>
          <span class="text-simple">
            @lagranjitaofic
          </span>
          <p>
            <a onclick="changeLink('https://api.whatsapp.com/send?phone=584242229121')" class="fab fa-whatsapp-square aWhatsapp"></a>
            <span class="text-simple">
              +58 (424) 222-9212
            </span>
          </p>
        </div>
      </div>
    </article>
    <div class="lineAqua-responsive"></div>
    <div class="borderLine"></div>
    <article class="item">
      <header>
        <p class="title-rules">
          REGLAMENTO DEL JUEGO DE LA GRANJITA
        </p>
        <p></p>
        <div class="text-rules">
          <embed src="assets/doc/REGLAMENTO_LA_GRANJITA.pdf" style="width: 100%;height: 450px;" type="application/pdf">
        </div> 
        <div class="rules-controls" style="color: white;">
          <div class="col-md-4 reglamento">
            <i class="fas fa-print" onclick="imprimir(`https://lagranjitaonline.com/assets/doc//REGLAMENTO_LA_GRANJITA.pdf`)"></i>
          </div>
          <div class="col-md-4 reglamento">
            <i class="fas fa-search-minus" id="disminuir" alt="zoomOut"></i>
          </div>
          <div class="col-md-4 reglamento">
            <i class="fas fa-search-plus" id="aumentar" alt="zoomIn"></i>
          </div>
        </div>
    </article>
    <div class="borderLine"></div>
    <article class="item">
      <header>
        <p class="titleRegister">
          ¿TE GUSTARIA <span class="work">TRABAJAR</span> CON <span class="us">NOSOTROS</span>?
        </p>
      </header>
      <form action="#" method="post" id="form-job">
        <section class="formContact">
          <div class="mb-3">
            <label for="name" class="form-label formLabel">Nombre & Apellido / Compa&ntilde;ia</label>
            <input type="text" class="form-control formInput" id="name" name="name">
          </div>
          <div class="mb-3">
            <label for="dni" class="form-label formLabel">Cedula de Identidad / RIF</label>
            <input type="text" class="form-control formInput" id="dni" name="dni">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label formLabel">N° telefonico</label>
            <input type="text" class="form-control formInput" id="phone" name="phone">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label formLabel">Correo Electronico</label>
            <input type="text" class="form-control formInput" id="email" name="email">
          </div>
          <div class="my-5 btnLuck">
            <button class="custom-btn btn-5" id="btn-submit-job" >YO QUIERO SER PARTE DEL EQUIPO</button>
          </div>
        </section>
      </form>
    </article>
    <div class="borderLine"></div>
  </section>
  <div class="lineAqua"></div>
  <!--Modal-->
  <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" data-bs-backdrop="static" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <img src="assets/img/logo.png" alt="" class="col-5">
          <h5 class="modal-title col-5" id="exampleModalLabel">Advertencia</h5>
        </div>
        <div class="modal-body">
          Este es un sitio web de resultados de apuestas, debe ser mayor de edad para poder entrar.
        </div>
        <div class="modal-footer">
          <button type="button" class="custom-btn btn-5" data-bs-dismiss="modal">Confirmo, tengo +18 años</button>
        </div>
      </div>
    </div>
  </div>
  <footer class="container my-3">
    <section class="section3 d-flex">
      <div class="row footer-content">
        <div class="footer copyright col-md-5 col-sm-12">
          <p>© 2017. Todos los derechos reservados.</p>
          <p>Operadora GLOBAL Sport 69, C.A.</p>
          <p>CI/RIF N° J-40955411-2</p>
          <p>Registro Nacional de Loteria. N°: 05-0-000016-2021</p>
        </div>
        <div class="footer d-flex justify-content-end col-md-7 col-sm-12">
          <div class="imgFooter"><img src="assets/img/logo.png" alt="" class="img-fluid"></div>
          <div class="imgFooter"><img src="assets/img/Logo_LoteriaDeMargarita_PieDePagina_LG_HD.png" alt="" class="img-fluid"></div>
          <div class="imgFooter"><img src="assets/img/Logo_Conalot_PieDePagina_LG_HD.png" alt="" class="img-fluid"></div>
        </div>
      </div>
    </section>
  </footer>
</body>

</html>