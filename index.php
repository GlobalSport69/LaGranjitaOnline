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
  <title>La Granjita Online</title>
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
            <a href="javascript:void(0);"  onclick="ancla('inicio')">
              <li>INICIO</li>
            </a>
            <a href="javascript:void(0);" onclick="ancla('pronostico')">
              <li>PRONOSTICOS</li>
            </a>
            <a href="javascript:void(0);" id="reglamentos"  onclick="ancla('reglamentos')">
              <li>REGLAMENTOS</li>
            </a>
            <a href="javascript:void(0);"  onclick="ancla('contactanos')">
              <li>CONTACTANOS</li>
            </a>
            <a href="javascript:void(0);"  onclick="ancla('registrate')">
              <li>REGISTRATE</li>
            </a>
          </ul>
        </div>
      </nav>
      <!---->
      <div class="col-lg-3 img-menu"><img src="assets/img/logo.png" alt="Logo_Header" class="img-fluid"></div>
      <div class="col-lg-9 position-relative row p-0 mb-1 title-menu">
        <span class="slogan">El Hogar de los ANIMALITOS</span>
        
      </div>
    </section>
  </header>
  <div class="lineAqua"></div>
  <!-- Carrusel Resultados -->
  <section class="container my-3">
    <div class="row animalslist1">
      <div class="col-lg-8">
        <div class="carouselAnimales">
        </div>
      </div>
    </div>
    <div class="row animalslist2">
      <div class="col-lg-9 col-md-9 col-sm-9">
        <div class="carouselAnimalsSlider" style="color: white;"></div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 Alarm-container">
        <div class="Alarm">
          <img class="alarmImg" src="assets/img/Alarma_OFF_ResultadosDiarios_Carrusel_LG_HD.png" alt="" class="img-fluid img-responsive">
          <!--<img src="assets/img/BotónFacebookON_TarjetaDigital_LG_HD.png" alt="" class="img-fluid img-responsive">-->
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
        <input type="date" class="dateInput" id="inputSearch" onchange="handler(event);">
      </div>
      <div class="col-sm-3 itemsResultsDay"></div>
    </div>
    </div>
    <div class="borderLine"></div>
    <div class="lineAqua-responsive"></div>
    <div class="item row d-flex"  id="pronostico">
      <article class="col-sm-12 pronostico text-center">
        <p class="pronosticoTitle">PRONOSTICA</p>
        <p class="pronosticoAnimalito">TU ANIMALITO</p>
        <p class="pronosticoSuerte">MUCHA SUERTE</p>
      </article>
      <div class="col-sm-12 pronosticosDiv">
        <span class="pronosticoImgBorder my-3"></span>

        <div class="btnLuck mb-5">
          <img src="assets/img/BotónDameSuerteOFF_Pronósticos_LG_HD.png" alt="DameSuerte" class="img-fluid my-3 btn-img-fluid img-responsive" onclick="getNameFiles()">
          <img src="assets/img/BotónDameSuerteON_Pronósticos_LG_HD.png" alt="DameSuerte" class="img-fluid my-3 btn-img-fluid img-responsive" onclick="getNameFiles()">
        </div>

        <p class="textWarning">
          ATENCION ESTO ES SOLO UN PRONOSTICO. LA GRANJITA NO SE HACE RESPONSABLE DE LOS RESULTADOS PROPORCIONADOS. LA RULETA ES UN JUEGO 100% DE AZAR. VERIFICADA Y REGULADA POR LAS REGLAS DE ENVITE Y AZAR NACIONALES E INTERNACIONALES.
        </p>
      </div>
    </div>

    <div class="borderLine"></div>
    <div class="lineAqua-responsive"></div>
    <div class="item row">
      <section class="qr" id="registrate">
        <p class="title">CADA SEGUNDO CUENTA</p>
        <img src="assets/img/linea_superior.png" alt="Linea Superior" class="img-fluid">

        <div class="subsectionQr d-flex responsive-contentColumn">
          <div class="imgQr ">
            <span class="topText">
              DESCARGA NUESTRA TARJETA DIGITAL
            </span>
            <img src="assets/img/QR.png" alt="QR Img" class="img-fluid qr-img">
            <span class="bottomText">
              ESCANEA TU CODIGO
            </span>
          </div>
          <div class="sectionbtnSN">
            <div class="btnLuck">
              <img src="assets/img/BotónInstagramOFF_TarjetaDigital_LG_HD.png" alt="" class="img-fluid img-responsive pointer">
              <img rel="noopener noreferrer" onclick="changeLink(`https://www.instagram.com/lagranjitaofic/?hl=es`)"  src="assets/img/BotónInstagramON_TarjetaDigital_LG_HD.png" alt="" class="img-fluid img-responsive pointer">
            </div>
            <div class="btnLuck">
              <img src="assets/img/BotónTwitterOFF_TarjetaDigital_LG_HD.png" alt="" class="img-fluid img-responsive pointer">
              <img rel="noopener noreferrer" onclick='changeLink("https://twitter.com/lagranjitaofic?lang=es")' src="assets/img/BotónTwitterON_TarjetaDigital_LG_HD.png" alt="" class="img-fluid img-responsive pointer">
            </div>
            <!--
              <div class="btnLuck">
              <img src="assets/img/BotónWhatsAppOFF_TarjetaDigital_LG_HD.png" alt="" class="img-fluid img-responsive">
              <img src="assets/img/BotónWhatsAppON_TarjetaDigital_LG_HD.png" alt="" class="img-fluid img-responsive">
            </div>
            <div class="btnLuck">
              <img src="assets/img/BotónFacebookOFF_TarjetaDigital_LG_HD.png" alt="" class="img-fluid img-responsive">
              <img src="assets/img/BotónFacebookON_TarjetaDigital_LG_HD.png" alt="" class="img-fluid img-responsive">
            </div>
            -->
            
          </div>
        </div>
        <!--
<img src="assets/img/linea_inferior.png" alt="Linea Inferior" class="img-fluid">
        <p class="mb-0 textWhatsapp">TE GUSTARIA RECIBIR TUS RESULTADOS VIA WHATSAPP AL INSTANTE LAS 24/7?</p>
        <div class="mt-2 btnLuck">
          <img src="assets/img/BotónRegístrateOFF_TarjetaDigital_LG_HD.png" alt="Boton Registrate" class="img-fluid float-end btn-img-fluid img-responsive">
          <img src="assets/img/BotónRegístrateON_TarjetaDigital_LG_HD.png" alt="Boton Registrate" class="img-fluid float-end btn-img-fluid img-responsive">
        </div>
        -->
      </section>
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
          <div class="m-2 btnLuck">
            <img src="assets/img/BotónRegístrateOFF_TarjetaDigital_LG_HD.png" alt="Boton Registrate" class="img-fluid float-end btn-img-fluid img-responsive pointer">
            <img src="assets/img/BotónRegístrateON_TarjetaDigital_LG_HD.png" alt="Boton Registrate" class="img-fluid float-end btn-img-fluid img-responsive pointer">
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
            <a onclick="changeLink('https://api.whatsapp.com/send?phone=584248236730')" class="fab fa-whatsapp-square aWhatsapp"></a>
            <span class="text-simple">
              +58 (424) 823-6730
            </span>
          </p>
        </div>
        <div class="miniQr">
          <img src="assets/img/QR.png" alt="" class="img-fluid img-qr-large" >
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
        <div class="rules-text-container">
          <p class="text-rules">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore non, voluptas sunt inventore sed consequuntur voluptatem ut ratione optio laudantium cupiditate aperiam aspernatur doloribus dolorum doloremque aliquam. Itaque architecto quos adipisci excepturi libero omnis amet earum eos officia voluptatem explicabo nostrum in optio perspiciatis nulla unde perferendis inventore magni nisi odit, sapiente eligendi fugiat reprehenderit. Illum, nihil laborum natus ducimus ab quidem cupiditate, ipsam placeat ex sequi provident repudiandae adipisci, libero doloribus asperiores expedita tempora odio itaque. Similique perferendis quod tempora natus ipsa, autem sunt. Quod molestias rem sit repellendus tempore. Aliquid, dolore! Voluptates fugiat est doloremque cum eveniet repellendus pariatur omnis itaque sunt culpa commodi ad, animi placeat molestiae quidem sed ullam perspiciatis, ex libero. Numquam ullam iure, nisi quia delectus aliquid nihil odio commodi officia? Et nostrum, quis minus perferendis omnis aperiam voluptate explicabo sapiente labore voluptatibus dignissimos cum rerum veniam, ipsa qui odio eos modi laborum aliquid nisi eaque reprehenderit! Eius corrupti quasi doloremque sapiente distinctio, molestias aut reiciendis neque earum quod, tempora dicta vero exercitationem? Vero natus est iure temporibus facilis dicta culpa modi perspiciatis ducimus nobis accusamus incidunt architecto, porro mollitia, ab laboriosam laudantium inventore. Minus officiis odio esse dicta nulla necessitatibus ab quas, beatae dolorum consequuntur dolores corporis asperiores corrupti debitis animi delectus ratione architecto incidunt nesciunt repudiandae molestiae nam consequatur? A praesentium animi est ab laborum earum eum dignissimos atque, dolores debitis repellat necessitatibus voluptatem quasi suscipit esse aliquid, obcaecati sit maiores quae molestiae repudiandae magni eos, maxime ad? Fuga repellendus molestiae expedita.
          </p>
        </div>
        <div class="rules-controls" style="color: white;">
          <div class="col-md-4 btnLuck">
            <img src="assets/img/IconoPrintOFF_Reglamentos_LG_HD.png" alt="Imprimir" onclick="imprimir(`https://loteria.caribeapuesta.com/files/REGLAMENTO_LA_GRANJITA.pdf`)" class="img-fluid float-end btn-img-fluid img-responsive pointer">
            <img src="assets/img/IconoPrintON_Reglamentos_LG_HD.png" alt="Imprimir" onclick="imprimir(`https://loteria.caribeapuesta.com/files/REGLAMENTO_LA_GRANJITA.pdf`)" class="img-fluid float-end btn-img-fluid img-responsive pointer">
          </div>
          <div class="col-md-4 btnLuck">
            <img src="assets/img/IconoZoomOUT_OFF_Reglamentos_LG_HD.png"  alt="zoomOut" class="img-fluid float-end btn-img-fluid img-responsive pointer">
            <img src="assets/img/IconoZoomOUT_ON_Reglamentos_LG_HD.png" id="font-down"  alt="zoomOut" class="img-fluid float-end btn-img-fluid img-responsive pointer">
          </div>
          <div class="col-md-4 btnLuck">
            <img src="assets/img/IconoZoomIN_OFF_Reglamentos_LG_HD.png"  alt="zoomIn" class="img-fluid float-end btn-img-fluid img-responsive pointer">
            <img src="assets/img/IconoZoomIN_ON_Reglamentos_LG_HD.png" id="font-up"  alt="zoomIn Registrate" class="img-fluid float-end btn-img-fluid img-responsive pointer">
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
          <div class="my-5 btnLuck">
            <img src="assets/img/BotónOFF_TrabajaConNosotros_LG_HD.png" alt="Boton Trabaja" class="img-fluid btn-img-fluid w-100 pointer">
            <img src="assets/img/BotónON_TrabajaConNosotros_LG_HD.png" alt="Boton Trabaja" class="img-fluid btn-img-fluid w-100 pointer">
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <img src="assets/img/logo.png" alt="" class="col-5">
        <h5 class="modal-title col-5" id="exampleModalLabel">Advertencia</h5>
        <button type="button" class="btn-close col-2" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Este es un sitio web de resultados de apuestas, debe ser mayor de edad para poder entrar.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Confirmo, tengo +18 años</button>
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
          <div class="imgFooter"><img src="assets/img/Logo_LaGranjita_PieDePagina_LG_HD.png" alt="" class="img-fluid"></div>
          <div class="imgFooter"><img src="assets/img/Logo_LoteriaDeMargarita_PieDePagina_LG_HD.png" alt="" class="img-fluid"></div>
          <div class="imgFooter"><img src="assets/img/Logo_Conalot_PieDePagina_LG_HD.png" alt="" class="img-fluid"></div>
        </div>
      </div>
    </section>
  </footer>
</body>

</html>