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
      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="carouselAnimalsSlider" style="color: white;"></div>
      </div>
      <!-- <div class="col-12 col-sm-12 col-md-12 col-lg-3 Alarm-container">
        <div class="Alarm">
          <img class="alarmImg" src="assets/img/Alarma_OFF_ResultadosDiarios_Carrusel_LG_HD.png" alt="" class="img-fluid img-responsive">
          <!--<img src="assets/img/BotónFacebookON_TarjetaDigital_LG_HD.png" alt="" class="img-fluid img-responsive">
        </div>
      </div> -->
    </div>
  </section>
  <!-- Carrusel Resultados -->
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
        <span class="pronosticoImgBorder my-3"></span>

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
          <div class="m-2 btnLuck">
            <button class="custom-btn btn-5" type="button" id="btn-submit-contact">REGISTRATE</button>
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
        <div class="rules-text-container text-rules">
          <!--
        <embed src="assets/Reglamento.pdf"  height="375"type="application/pdf">
         -->
            <p size="4" class="reglamento-subTitle"><b>REGLAMENTO DEL JUEGO LA
                GRANJITA LOTERIA INTERNACIONAL DE MARGARITA</b>
            </p>
            <p class='text-reglamento'>
              El presente Reglamento tiene por objeto establecer las condiciones que regirán el
              juego de lotería denominado <b>LA GRANJITA</b>, de la <b>Operadora GLOBAL SPORT
                69, C.A.,</b> en lo sucesivo <b>“LA OPERADORA”</b> y autorizado por el <b>INSTITUTO
                AUTONOMO NEOESPARTANO DE BENEFICENCIA PÚBLICA Y ASISTENCIA
                SOCIAL DEL ESTADO NUEVA ESPARTA (INEBEN) “LOTERÍA
                INTERNACIONAL DE MARGARITA”,</b> en lo sucesivo <b>"LA LOTERÍA"</b>, cuyas
              modalidades y características se especifican más adelante.
            </p>
            <p class="reglamento-subTitle"><b>EL JUEGO</b></p>
            <p class='text-reglamento'><span class="subrayado">REGLA 1:</span> <b>LA GRANJITA</b> es un juego de lotería con premios fijos, que consiste en
              el sorteo o extracción al azar de una (1) figura de animal, de una máquina o
              equipo de sorteo, de entre treinta y ocho (38) figuras de animales, a través de
              sorteos realizados por máquinas o equipos de realización de sorteos de juegos de
              lotería, propiedad de <b>“LA OPERADORA”</b> y de acuerdo a lo establecido en el
              Artículo 14 de la Ley Nacional de Lotería. Las figuras de Animales, se identifican y
              detallan en la tabla siguiente:
            </p>
            <div class="table-container">
              <table class="table table-bordered table-responsive-sm table-rules text-center">
                <thead>
                  <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Animal</th>
                    <th scope="col">N°</th>
                    <th scope="col">Animal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>0</td>
                    <td>Delfín</td>
                    <td>00</td>
                    <td>Ballena</td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Carnero</td>
                    <td>02</td>
                    <td>Toro</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>Ciempiés</td>
                    <td>04</td>
                    <td>Alacrán</td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>León</td>
                    <td>06</td>
                    <td>Rana</td>
                  </tr>
                  <tr>
                    <td>07</td>
                    <td>Perico</td>
                    <td>08</td>
                    <td>Ratón</td>
                  </tr>
                  <tr>
                    <td>09</td>
                    <td>Águila</td>
                    <td>10</td>
                    <td>Tigre</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Gato</td>
                    <td>12</td>
                    <td>Caballo</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Mono</td>
                    <td>14</td>
                    <td>Paloma</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Zorro</td>
                    <td>16</td>
                    <td>Oso</td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>Pavo</td>
                    <td>18</td>
                    <td>Burro</td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>Chivo</td>
                    <td>20</td>
                    <td>Cochino</td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td>Gallo</td>
                    <td>22</td>
                    <td>Camello</td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>Cebra</td>
                    <td>24</td>
                    <td>Iguana</td>
                  </tr>
                  <tr>
                    <td>25</td>
                    <td>Gallina</td>
                    <td>26</td>
                    <td>Vaca</td>
                  </tr>
                  <tr>
                    <td>27</td>
                    <td>Perro</td>
                    <td>28</td>
                    <td>Zamuro</td>
                  </tr>
                  <tr>
                    <td>29</td>
                    <td>Elefante</td>
                    <td>30</td>
                    <td>Caimán</td>
                  </tr>
                  <tr>
                    <td>31</td>
                    <td>Lapa</td>
                    <td>32</td>
                    <td>Ardila</td>
                  </tr>
                  <tr>
                    <td>33</td>
                    <td>Pescado</td>
                    <td>34</td>
                    <td>Venado</td>
                  </tr>
                  <tr>
                    <td>35</td>
                    <td>Jirafa</td>
                    <td>36</td>
                    <td>Culebra</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p class='text-reglamento'><span class="subrayado">REGLA 2:</span>
              La figura del animal sorteado o extraído de la máquina o equipo de sorteo, será <b>LA GRANJITA</b> ganadora.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 3:</span>
              La probabilidad total aproximada de ganar un premio en el juego <b>LA GRANJITA</b> es: de 1/38, es decir un acierto de treinta y ocho figuras de animales
              posibles.
            </p>
            <p class="reglamento-subTitle"><b>LAS APUESTAS</b></p>
            <p class='text-reglamento'><span class="subrayado">REGLA 4:</span> La(s) apuesta(s) autorizadas, requeridas por los jugadores ante el centro de apuestas que posean la correspondiente Autorización o Licencia emitida por la
              <b>LOTERÍA DE CARACAS</b> y que se encuentren debidamente registradas por ante la Comisión Nacional de Lotería <b>CONALOT</b>, se harán a través de las unidades de
              comercialización autorizadas, serán transmitida(s) por el Comercializador para su autorización por parte de <b>“LA OPERADORA”</b> y deberán cumplir con las normas
              previstas en la Ley Nacional de Lotería, Providencias, Normativa aplicable y el presente Reglamento.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 5:</span> Las unidades de comercialización o máquinas expendedoras
              especializadas para la comercialización de las modalidades del juego y venta de
              apuestas del juego <b>LA GRANJITA</b> en cada centro de apuestas, emitirán un
              medio de apuesta, ticket o boleto que identificará a la
              Lotería de Caracas, modalidad del juego escogida(s) por el apostador, datos del
              centro de apuestas, figura(s) de animal(es) escogido(s), monto(s) en bolívares de
              la(s) apuesta(s) realizadas, fecha y hora de la venta, fecha y hora(s) del(os)
              sorteo(s); un código de seguridad que permitirá validar la apuesta; el lapso de
              caducidad para el pago de premios; un Código de Autorización único generado por
              el sistema Central de Apuestas de La Operadora que certifica que el medio de
              apuesta ha sido registrado y es legal; un número serial único y correlativo y/o
              código de barras del medio de apuesta; probabilidad de ganar y advertencia al
              juego.
            </p>
            <p class='text-reglamento'><span class="subrayado">PÁRRAFO UNICO:</span>  La apuesta citada, se podrá realizar por vía telefónica, on line
              y/o a través de cualquier otro medio mecánico o electrónico que emita la Unidad
              Comercializadora al apostador mediante un instrumento impreso que reúna los
              requisitos establecidos en la presente regla, así como lo establecido en el último
              aparte del artículo 24 de la Ley Nacional de Lotería. El ticket, boleto o instrumento
              de juego, estará diseñado bajo la modalidad de factura, de acuerdo a lo
              establecido en la Providencia Administrativa No. 102, de fecha 22 de octubre de
              2009, dictada por el Servicio Nacional Integrado de Administración Aduanera y
              Tributaria (SENIAT), publicada en la Gaceta Oficial de la República Bolivariana de
              Venezuela Nº 39.290, de fecha 22 de octubre del año 2009. Los requisitos
              contenidos en la citada Providencia podrán variar ajustándose a las exigencias
              que al efecto se dicten a través de Providencias Administrativas y/o instrucciones
              emanadas de los organismos competentes de conformidad con la Ley Especial
              que rige la materia.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 6:</span> Sólo serán válidas las apuestas que se encuentren debidamente
              registradas con su correspondiente Código de Autorización en el Sistema Central
              de Apuestas de <b>“LA OPERADORA”</b> y en el Sistema de recepción de Data de <b>“LA
              LOTERÍA”</b>, el Código de Autorización es el único elemento que certifica que el
              medio de apuesta ha sido registrado y es legal.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 7:</span> El monto mínimo de apuesta establecido 
              en cada jugada que se realice
              para el juego <b>LA GRANJITA</b> es de <b>CINCUENTA CÉNTIMOS DE BOLÍVAR
              SOBERANO (Bs.S. 0,50)</b> y hasta el límite máximo establecido por <b> “LA
              OPERADORA”</b>. 
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 8:</span> A los efectos previstos en el presente Reglamento de Juego, se
              entenderá como Apuesta Autorizada aquella que, una vez solicitada por el
              apostador en el Centro de Apuesta a través de la Unidad de Comercialización, es
              transmitida por el Comercializador al Operador utilizando para ello un sistema
              telemático autorizado a fin de que el Operador autorice dicha apuesta. Esta
              apuesta debe cumplir con las normas previstas en el Reglamento de Juego que
              esté vigente para la fecha del sorteo y normativa legal aplicable.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 9:</span> Se define Código de Autorización, al código alfanumérico, único e
              irrepetible, que identifica y certifica que la apuesta pretendida por el apostador ha
              sido autorizada y registrada por el Operador, lo que le confiere valor legal. En
              consecuencia, a los efectos del control que deben ejercer los Organismos
              competentes, el Código de Autorización es el único elemento que VALIDA la
              apuesta. En consecuencia, a los efectos de control antes mencionados, éste pasa
              a ser un <b>“CÓDIGO DE AUTORIZACIÓN”</b> para dichos órganos administrativos.
              Este Código debe obligatoriamente contener las especificaciones previstas en el
              artículo 3 de la Providencia N° 2009-0053 emanada de la Comisión Nacional de
              Lotería <b>CONALOT</b> Además dicho código deberá:
            </p>
            <ol type="a" style="color: white;" class="rules-list">
                <li>Estar impreso en el medio de apuesta.</li>
                <li>Permitir ser auditado en línea o por Internet de forma directa, a través de
                    cualquier medio telemático desde el cual se invoque.</li>
                <li>Generarse de una aplicación tecnológica instalada en el Servidor
                    del Operador autorizado para tal fin por la Institución Oficial de Beneficencia
                    Pública y Asistencia Social y/o en el Servidor del Prestador de Servicio
                    Telemático.</li>
            </ol>
            <p class='text-reglamento'><span class="subrayado">REGLA 10:</span> El medio de apuesta, 
            ticket o boleto contentivo de la apuesta autorizada, estará conformado como una factura de acuerdo a los requisitos
            establecidos por el ente competente en la materia.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 11:</span> El jugador deberá conservar su medio de apuesta, ticket o boleto en
              buen estado de conservación, ya que es el único documento probatorio de la
              selección de su apuesta y será el único recibo o comprobante válido para el
              reclamo del premio.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 12:</span> Los Comercializadores y Centros de apuestas o vendedores de medios
              de apuestas del juego <b>LA GRANJITA</b>, son comerciantes independientes y
              asumen la total responsabilidad de la ejecución de todas las operaciones a su
              cargo. En consecuencia <b>LA OPERADORA</b> y <b>LA LOTERÍA</b>, quedarán exentos de cualquier
              reclamación derivada de sus operaciones.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 13:</span>  El sistema de venta de apuesta para el juego <b>LA GRANJITA</b>, solo
              aceptará jugadas hasta cinco (5) minutos antes de la realización del respectivo
              sorteo y aceptará jugadas adelantadas para futuros sorteos que se realicen el
              mismo día. Sólo la apuesta realizada antes del sorteo y registrada en el Sistema
              de Lotería, será reconocida y se tendrá como válida.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 14:</span> So pena de nulidad y por no tener capacidad negocial plena, los
              menores de dieciocho (18) años no podrán adquirir medios de apuestas del juego
              LA GRANJITA. En consecuencia no podrán participar como jugadores o
              apostadores, ni cobrar premios.
            </p>
            <p class="reglamento-subTitle"><b>CELEBRACIÓN DE SORTEOS Y PLAZOS</b></p>
            <p class='text-reglamento'><span class="subrayado">REGLA 15:</span> Para determinar los ganadores del juego <b>LA GRANJITA</b> se realizarán
              TRES (03) sorteos diarios divididos en mañana, tarde y noche, de lunes a
              domingo; en los siguientes horarios: <b>Mañana:</b> 9 a.m., 10 a.m. y 11 a.m.; <b>Tarde:</b> 12
              m, 1 p.m., 2 p.m., 3 p.m., 4 p.m., 5 p.m. y 6 p.m.; y <b>Noche:</b> 7 p.m.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 16:</span> Los sorteos serán efectuados de acuerdo con los sistemas de
              realización legalmente permitidos y autorizados por los organismos competentes
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 17:</span> Los sorteos se realizarán en acto público y en presencia de un
              funcionario público que podrá ser Notario Público o Juez, quien dará fe pública de
              lo realizado y dejará constancia de ello en el Acta correspondiente. Los resultados
              de los sorteos serán informados al público por cualquier servicio de
              telecomunicaciones o medio de comunicación nacional o regional.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 18:</span> Los sorteos se realizarán en los horarios establecidos en la Regla 15
              del presente Reglamento. En caso que alguno(s) de los sorteos no pueda(n)
              celebrarse por causa sobrevenidas de fuerza mayor, o deba interrumpirse durante
              el curso de su ejecución, su celebración o continuación deberá llevarse a cabo
              cuando cesen las circunstancias sobrevenidas.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 19:</span> Durante la realización de cada sorteo, el resultado será válido solo
              cuando se posicionen y se mantengan en sus correspondientes celdas las figuras
              de animales, que permitan al Notario Público o Juez, la lectura clara y precisa de
              la combinación sorteada, de la cual dará fe pública.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 20:</span> En caso de que la máquina o equipo de sorteo utilizado sufra algún
              desperfecto técnico que imposibilite la realización del sorteo, en los términos antes
              señalados, se utilizará o empleará otra máquina o equipo de sorteo, que debe
              estar disponible antes de sorteo. Si ésta también se averiare, el sorteo
              podrá ser suspendido.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 21:</span> Concluido el sorteo, se procederá a dejar constancia del resultado del
              mismo en acta levantada al efecto, que suscribirán el Notario, Juez u otro
              funcionario público autorizado para dar fe pública, que lo haya presenciado, el
              representante de <b>LA LOTERÍA</b> y el representante de <b>LA OPERADORA</b>. En caso
              de ausencia del representante de <b>LA LOTERÍA</b> o de <b>LA OPERADORA</b>, firmarán
              el ACTA dos (2) personas escogidas entre las asistentes como testigos del acto, si
              los hubiere.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 22:</span> 
              <b>LA GRANJITA</b> es un juego con sorteos de premios fijos.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 23:</span> 
               El acierto de la figura de un (1) animal sorteado o extraído, leído y
              anunciado será <b>LA GRANJITA</b> ganadora, si en la jugada correspondiente a esta
              modalidad, la figura del animal escogido por el apostador coincide con la figura
              del animal sorteado, cantado o extraído <b>LA GRANJITA</b>, en el sorteo del día,
              fecha y hora correspondiente, el apostador ganará el monto en bolívares
              soberanos equivalente a treinta (30) veces el monto de su apuesta o valor
              apostado. Si el apostador hiciere dos (2) o más jugadas en esta modalidad en un
              mismo medio de apuesta, ellas serán independientes entre sí, deberán aparecer
              impresas horizontalmente una debajo de la otra y cada una deberá tener su
              monto de apuesta en bolívares soberanos.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 24:</span> 
              <b>LA OPERADORA</b> previa autorización de <b>LA LOTERÍA</b>, podrá modificar
              el valor de las apuestas y el prospecto de premios a repartir.
            </p>
            <p class="reglamento-subTitle"><b>PAGO DE PREMIOS</b></p>
            <p class='text-reglamento'><span class="subrayado">REGLA 25:</span> 
               Solo participaran en el sorteo respectivo, los medios de apuestas del
              Juego <b>LA GRANJITA</b> emitidos por las unidades de comercialización ubicadas en
              los Centros de Apuestas autorizados, con todos sus requisitos formales y que
              cumplan con lo establecido en las reglas 5, 6 y 10 de este Reglamento.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 26:</span> 
               Para el pago de premios se requiere la presentación del respectivo
              medio de apuesta, ticket o boleto contentivo de la(s) combinación(es) ganadora(s),
              el cual deberá ser validado en el centro de apuestas, donde el apostador realizó
              su apuesta durante las horas de operación del sistema de ventas, en el término de
              los cinco (05) días hábiles, contados a partir del día siguiente a la fecha de
              celebración del respectivo sorteo.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 27:</span> 
               El derecho a cobrar premio caducará a las doce de la noche (12:00
              P.M.) del quinto (5to.) día hábil, contados a partir del día siguiente al día del
              respectivo sorteo. Vencido el término de caducidad establecido, se extingue todo
              derecho a reclamo de pago de premios.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 28:</span> 
               El premio será pagado a la persona que demuestre su condición de
              ganador y será indispensable la entrega del medio de apuesta original. El
              Comercializador constatará o verificará su validez, y exigirá el cumplimiento de las
              normas previstas en este Reglamento y leyes vigentes. Es condición
              indispensable para cobrar un premio, que todo ganador deberá presentar sus
              documentos de identificación. 
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 29:</span> 
              El acreedor del premio deberá probar su condición de ganador
            mediante la presentación y entrega del medio de apuesta, ticket o boleto original
            en perfecto estado de conservación, totalmente íntegro, con su contenido y signos
            distintivos completos, que no registren o presenten ningún tipo de enmendaduras,
            adulteraciones, reconstrucciones, roturas o que resulten ilegibles en todo o en
            parte, no teniendo en dichos casos validez alguna. Tampoco tendrán validez los
            medios de apuestas emitidos en Centros de Apuestas no autorizados, ni los que
            no posean su respectivo Código de autorización, ni los que no estén registrados
            tanto en el Sistema Central de Apuestas de la Operadora como en el Sistema de
            Recepción de Data de la Lotería.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 30:</span> 
              Los apostadores que se consideren con derecho a reclamo, deberán
            dirigirse personalmente al centro de Apuestas en que realizaron su jugada y este
            canalizará el reclamo ante el Comercializador respectivo, la reclamación deberá
            formularse dentro del plazo máximo e improrrogable de cinco (5) días hábiles,
            contados a partir del día siguiente a la fecha del sorteo respectivo. Para que se
            admita la reclamación, el medio de apuesta deberá cumplir con lo establecido en
            la Regla 29 del presente Reglamento.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 31:</span> 
             El pago de premios correspondientes al juego LA GRANJITA estará sujeto a la retención del porcentaje de los impuestos establecidos en la ley y en
            ningún caso generan intereses ni estarán sujetos a corrección monetaria ni ajustes
            por inflación.
            </p>
            <p class="reglamento-subTitle"><b>NORMAS FINALES</b></p>
            <p class='text-reglamento'><span class="subrayado">REGLA 32:</span> 
              <b>LA OPERADORA</b> y <b>LA LOTERÍA</b>, no serán responsables en caso de
              anulaciones de apuestas, acordadas en virtud de lo establecido en el presente
              reglamento, ni en los casos de hurto, robo o extravío del respectivo ticket, el cual
              constituye el único medio probatorio de la apuesta.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 33:</span> 
              <b>LA OPERADORA</b> previa autorización de <b>LA LOTERÍA</b> y de la
            <b>CONALOT</b>, podrá modificar o reformar total o parcialmente el presente reglamento
            y deberá informarlo al público apostador mediante anuncio publicado en prensa
            nacional.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 34:</span> 
             En caso de error en las publicaciones o anuncios de los resultados
            oficiales de los sorteos a través de medios de comunicación como prensa, radio o
            televisión, o en caso de surgir cualquier duda o controversia, <b>LA OPERADORA,
            LA LOTERÍA, COMERCIALIZADORES, CENTROS DE APUESTA y LOS
            APOSTADORES,</b> se someterán única y exclusivamente al resultado que conste
            en el acta original del respectivo sorteo y a lo que se establezca en el Reglamento
            del Juego <b>LA GRANJITA</b> que esté vigente en la fecha del sorteo respectivo.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 35:</span> 
             El hecho de participar en el juego implica, por parte del apostador, su
            aceptación y su adhesión a las normas previstas en el Reglamento del Juego <b>LA
            GRANJITA</b> que esté vigente para la fecha del sorteo respectivo.
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 36:</span> 
              El presente reglamento entrará en vigencia a partir de la fecha de
            publicación de su texto íntegro, por dos (2) veces, con intervalo de tres (3) días en
            diario de circulación nacional de acuerdo a lo establecido en el artículo 24 de La
            Ley Nacional de Lotería, fue aprobado por <b>“LA LOTERIA”</b> el XX de XXXXXXXX
            de 2018. 
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 37:</span> 
              Sólo podrá comercializar el juego LA GRANJITA aquel Comercializador
            que tenga una relación contractual con LA OPERADORA, y que haya obtenido la
            Licencia otorgada por <b>LA LOTERIA</b> y la <b>CONALOT</b>, autorizándole a comercializar
            dicho juego a través de los CENTROS DE APUESTAS afiliados a su red, los
            cuales a su vez estén autorizados mediante Licencia otorgada por <b>LA LOTERIA</b> y
            la <b>CONALOT</b>, a prestar servicio como espacios físicos acondicionados
            adecuadamente para la venta directa al público apostador del juego <b>LA
            GRANJITA</b>, a través de las unidades de comercialización. 
            </p>
            <p class='text-reglamento'><span class="subrayado">REGLA 38:</span> 
              Se establece como domicilio especial y excluyente de cualquier otro a
            la ciudad de Porlamar, a la jurisdicción de cuyos Tribunales se someterá cualquier
            conflicto relacionado con el juego <b>LA GRANJITA</b>.
            </p>
            <p class="reglamento-LastTitle"><b>SERVICIO AUTÓNOMO DE BENEFICENCIA GLOBAL SPORT 69, C.A. <br>
              PÚBLICA Y ASISTENCIA SOCIAL DEL ESTADO NUEVA ESPARTA <br>
              LOTERÍA INTERNACIONAL DE MARGARITA</b></p>
        </div>
        <div class="rules-controls" style="color: white;">
          <div class="col-md-4 btnLuck reglamento">
            <i class="fas fa-print" onclick="imprimir(`https://loteria.premierpluss.com/files/REGLAMENTO_LA_GRANJITA.pdf`)"></i>
          </div>
          <div class="col-md-4 btnLuck reglamento">
            <i class="fas fa-search-minus" id="disminuir" alt="zoomOut"></i>
          </div>
          <div class="col-md-4 btnLuck reglamento">
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
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Confirmo, tengo +18 años</button>
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
