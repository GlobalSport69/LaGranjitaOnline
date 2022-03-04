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

  <script type="text/javascript" src="assets/js/fetchApi.js"></script>
  <script type="text/javascript" src="assets/js/scripts.js"></script>
  <title>La Granjita Online</title>
</head>

<body>
  <header class="container">
    <section class="row">
      <div class="col-lg-3"><img src="assets/img/logo.png" alt="Logo_Header" class="img-fluid"></div>
      <div class="col-lg-6 offset-lg-3 position-relative row p-0 mb-1">
        <span class="slogan">El Hogar de los ANIMALITOS</span>
        <div class="col-lg-12 position-absolute fixed-bottom p-0">
          <div class="menuItems">
            <span>
              INICIO
            </span>
            <span>
              PRONÓSTICOS
            </span>
            <span>
              REGLAMENTOS
            </span>
            <span>
              CONTÁCTANOS
            </span>
            <span>
              REGISTRATE
            </span>
          </div>
        </div>
      </div>
    </section>
  </header>
  <div class="lineAqua"></div>
  <!-- Carrusel Resultados -->
  <section class="container my-3">
    <div class="row">
      <div class="col-lg-12">
        <div class="carouselAnimales">
        </div>
      </div>
    </div>
  </section>
  <!-- Carrusel Resultados -->
  <div class="lineAqua"></div>
  <!-- Seccion 3 -->
  <section class="container my-3 d-flex section3">
    <div class="borderLine"></div>
    <div class="item row">
      <div class="col-sm-12 text-left mb-3"><span class="resultsText">RESULTADOS</span></div>
      <div class="col-sm-12 text-left "><span class="dateResultsFilter">FECHA</span>
        <input type="date" name="" id="inputSearch" onchange="handler(event);">
      </div>
      <div class="col-sm-3 itemsResultsDay"></div>
    </div>
    </div>
    <div class="borderLine"></div>
    <div class="item row d-flex">
      <article class="col-sm-6 pronostico">
        <p class="pronosticoTitle">PRONOSTICA</p>
        <p class="pronosticoAnimalito">TU ANIMALITO</p>
        <p class="pronosticoSuerte">MUCHA SUERTE</p>
      </article>
      <div class="col-sm-6 px-0 text-end">
        <p class="birthday">CUMPLEA&Ntilde;OS / FECHA IMPORTANTE</p>
      </div>
      <div class="col-sm-12 pronosticosDiv">
        <span class="pronosticoImgBorder my-3"></span>
        <img src="assets/img/BotónDameSuerteOFF_Pronósticos_LG_HD.png" alt="DameSuerte" class="img-fluid my-3">
        <p class="textWarning">
          ATENCION ESTO ES SOLO UN PRONOSTICO. LA GRANJITA NO SE HACE RESPONSABLE DE LOS RESULTADOS PROPORCIONADOS. LA RULETA ES UN JUEGO 100% DE AZAR. VERIFICADA Y REGULADA POR LAS REGLAS DE ENVITE Y AZAR NACIONALES E INTERNACIONALES.
        </p>
      </div>
    </div>
    <div class="borderLine"></div>
    <div class="item row">
      <section class="qr">
        <p class="title">CADA SEGUNDO CUENTA</p>
        <img src="assets/img/linea_superior.png" alt="Linea Superior" class="img-fluid">

        <div class="subsectionQr d-flex">
          <div class="imgQr">
            <span class="topText">
              DESCARGA NUESTRA TARJETA DIGITAL
            </span>
            <img src="assets/img/QR.png" alt="QR Img" class="img-fluid qr-img">
            <span class="bottomText">
              ESCANEA TU CODIGO
            </span>
          </div>
          <div class="sectionbtnSN">
            <img src="assets/img/BotónFacebookOFF_TarjetaDigital_LG_HD.png" alt="" class="img-fluid">
            <img src="assets/img/BotónInstagramOFF_TarjetaDigital_LG_HD.png" alt="" class="img-fluid">
            <img src="assets/img/BotónTwitterOFF_TarjetaDigital_LG_HD.png" alt="" class="img-fluid">
            <img src="assets/img/BotónWhatsAppOFF_TarjetaDigital_LG_HD.png" alt="" class="img-fluid">
          </div>
        </div>
        <img src="assets/img/linea_inferior.png" alt="Linea Inferior" class="img-fluid">
        <p class="mb-0 textWhatsapp">TE GUSTARIA RECIBIR TUS RESULTADOS VIA WHATSAPP AL INSTANTE LAS 24/7?</p>
        <div class="mt-2">
          <img src="assets/img/BotónRegístrateOFF_TarjetaDigital_LG_HD.png" alt="Boton Registrate" class="img-fluid float-end">
        </div>
      </section>
    </div>
    <div class="borderLine"></div>
  </section>
  <div class="lineAqua"></div>
  <!-- Section 4 -->
  <section class="container my-3 d-flex section3">
    <div class="borderLine"></div>
    <article class="item">
      <header>
        <p class="titleContact">
          CONTACTANOS
        </p>
      </header>
      <form action="#">
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
        </section>
      </form>
      <div class="d-flex">
        <div class="infoContact">
          <i class="fab fa-facebook-square"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-twitter-square"></i>
          <span>
            @lagranjitaofic
          </span>
          <p>
            <i class="fab fa-whatsapp-square"></i>
            <span>
              +58 (424) 823-6730
            </span>
          </p>
        </div>
        <div class="miniQr">
          <img src="assets/img/QR.png" alt="" class="img-fluid">
        </div>
      </div>
    </article>
    <div class="borderLine"></div>
    <article class="item">
      2
    </article>
    <div class="borderLine"></div>
    <article class="item">
      <header>
        <p class="titleRegister">
          ¿TE GUSTARIA <span class="work">TRABAJAR</span> CON <span class="us">NOSOTROS</span>?
        </p>
      </header>
      <form action="#">
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
          <div class="mb3"><img src="assets/img/BotónOFF_TrabajaConNosotros_LG_HD.png" alt="Boton Trabaja" class="img-fluid w-100"></div>
        </section>
      </form>
    </article>
    <div class="borderLine"></div>
  </section>
  <div class="lineAqua"></div>
  <footer class="container my-3">
    <section class="section3 d-flex">
      <div class="footer copyright">
        <p>© 2017. Todos los derechos reservados.</p>
        <p>Operadora GLOBAL Sport 69, C.A.</p>
        <p>CI/RIF N° J-40955411-2</p>
        <p>Registro Nacional de Loteria. N°: 05-0-000016-2021</p>
      </div>
      <div class="footer d-flex justify-content-end">
        <div class="imgFooter"><img src="assets/img/Logo_LaGranjita_PieDePagina_LG_HD.png" alt="" class="img-fluid"></div>
        <div class="imgFooter"><img src="assets/img/Logo_LoteriaDeMargarita_PieDePagina_LG_HD.png" alt="" class="img-fluid"></div>
        <div class="imgFooter"><img src="assets/img/Logo_Conalot_PieDePagina_LG_HD.png" alt="" class="img-fluid"></div>
      </div>
    </section>
  </footer>
</body>

</html>