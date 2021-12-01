<?php
require_once('../models/Producto.php');
require_once('./conexion.php');
$ip_p = 0;
if (isset($_POST['id_p'])) {
  $ip_p = $_POST['id_p'];
} else {
  $ip_p = $_GET['id_p'];
}

$sqlgrabar = "SELECT * FROM producto WHERE IdProducto = '$ip_p'";
if (mysqli_query($conn, $sqlgrabar)) {
  $ordStatus = 'success';
  $resultado = mysqli_query($conn, $sqlgrabar);
  $datos = mysqli_fetch_array($resultado);
} else {
  $statusMsg = "Error al momento de subir formulario, por favor vuelva a intentarlo.";
};
$img = $datos['imagen'] . ".jpg";

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es" class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <!-- METAS FACEBOOK -->
  <meta content='http://www.lacteoslalaja.com' property='og:url' />
  <meta content='' property='og:title' />
  <meta content='http://www.lacteoslalaja.com/core/img/logow.png' property='og:image' />
  <meta content='' property='og:description' />

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="google-site-verification" content="">
  <title>Comprar | La Laja :: Productos Lácteos ::</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Achebranding" />
  <meta name="robots" content="index,follow" />

  <!-- CSS y JS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
  <link rel="stylesheet" type="text/css" href="../css/stylemockup.css">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="https://use.fontawesome.com/39d942f213.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="../css/cards.css">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/chatbot.css">
  <link href="../css/popup.css" rel="stylesheet" type="text/css" />
  </link>
</head>

<body style="color: #34495E;">
  <nav id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container " id="tooltip_container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand logo" href="/LaLaja/index.php"><img src="http://www.lacteoslalaja.com/core/img/logo.png" alt="Logo"></a>
      </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="/LaLaja/index.php">Inicio</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <i class="icon-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="/LaLaja/paginas/productos.php">Novedades</a></li>
              <li class="divider"></li>
              <li><a href="/LaLaja/paginas/productos.php">Promociones</a></li>
              <li class="divider"></li>
              <li><a href="/LaLaja/paginas/productos.php">General</a></li>
            </ul>
          </li>
          <li><a href="/LaLaja/paginas/contacto.html">Contacto</a></li>

          <li><input type="text" id="buscador" class="form-control my-2"></input></li>
          <li><i class="fa fa-search"></i></li>
          <div id="respuesta"></div>
        </ul>
      </div>
    </div>
  </nav>

  <!--<div id="popup" class="overlay">
      <div id="popupBody">
        <h2>Video Tutorial</h2>
        <a id="cerrar" href="#">&times;</a>
        <div class="popupContent">
         <a href="#" class="fw-bold border-white bg-yellow text-white">Video Tutorial</a>
        </div>
      </div>
    </div>-->

  <!--TOOL TIP-->
  <span class="abrir-chat abchat" data-toggle="tooltip" data-placement="top" title="ABRIR CHAT DE AYUDA"><i class="fa fa-question"></i></span>
  <!--FIN TOOL-->
  <!--TOOL TIP-->
  <span class="ir-arriba"><img src="/LaLaja/images/milk-icon-min-arrow.png" class="icon-milk" alt="" data-toggle="tooltip" data-placement="top" title="IR ARRIBA"></span>
  <!--FIN TOOL-->


  <div class="row">
    <!--CHAT BOT-->
    <div class="wrapper-chatbot not-visible">
      <div class="title">Chat de Ayuda<a class="fa fa-times close-chat"></a></div>
      <div class="form">
        <div class="bot-inbox inbox">
          <div class="icon">
            <img src="/LaLaja/images/vaca-chat.png" class="vaca-chat"></img>
          </div>
          <div class="msg-header">
            <p>Hola amigo, ¿Como puedo ayudarte?</p>
          </div>
        </div>
      </div>
      <div class="typing-field">
        <div class="input-data">
          <input id="data" type="text" placeholder="Escribe algo aqui.." required>
          <button id="send-btn">Enviar</button>
        </div>
      </div>
    </div>
    <!--FIN CHATBOT-->




    <div class="green-back">
      <br>
      <h1>Disfruta de la mejor calidad</h1><br>
    </div>
    <div class="row grey-back">
      <div class="container" style="border-radius:15px; font-family:inherit; font-size: inherit; background-color: #fafafa; box-shadow:4px 4px 10px rgba(0,0,0,0.06);">
        <div class="status alert alert-success" style="display: none"></div>
        <div class="col-12">
          <h3>Información de contacto</h3>
          <h4>Por Favor ingresa tus datos.</h4>
        </div><br>
        <nav aria-label="Ruta de Navegación">
          <ol class="breadcrumb" role="list">
            <li class="breadcrumb__item breadcrumb__item--completed">
              <a class="breadcrumb__link" href="../index.php" data-toggle="tooltip" data-placement="top" title="INICIO">Inicio <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            </li>
            <li class="breadcrumb__item breadcrumb__item--completed">
              <a class="breadcrumb__link" href="/LaLaja/paginas/productos.php" data-toggle="tooltip" data-placement="top" title="Productos">Productos <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            </li>
            <li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--completed" aria-current="step">
              <span class="breadcrumb__text"><b>Información</b></span>
              <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </li>
            <li class="breadcrumb__item breadcrumb__item--completed">
              <a class="breadcrumb__link">Envíos</a>
          </ol>
        </nav>
        <form action="compra.php" method="post">
          <div class=" col-sm-12 col-md-8">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Ejemplo@lalaja.com" name="email" data-toggle="tooltip" data-placement="top" title="INGRESAR EMAIL" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputName">Nombre y Apellido</label>
                <input type="text" class="form-control" id="inputName" placeholder="Ingresa tu(s) nombre(s) y apellido(s)" name="full_name" data-toggle="tooltip" data-placement="top" title="INGRESA NOMBRE Y APELLIDOS" required>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEnter">Empresa</label>
              <input type="text" class="form-control" id="inputEnter" name="empresa" placeholder="Empresa (opcional) se puede dejar en blanco" data-toggle="tooltip" data-placement="top" title="INGRESA EMPRESA (OPCIONAL)">
            </div>
            <div class="form-group col-md-6">
              <label for="inputStreet">Calle y Numero de casa</label>
              <input type="text" class="form-control" id="inputStreet" name="domicilio" placeholder="Calle y Numero de casa" data-toggle="tooltip" data-placement="top" title="CALLE Y NUMERO DE DOMICILIO" required>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputAp">Apartamento, Local, etc</label>
                <input type="text" class="form-control" id="inputAp" name="tipoV" placeholder="(Opcional) se puede dejar en blanco" data-toggle="tooltip" data-placement="top" title="Esta Parte es opcional">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCP">Codigo Postal</label>
                <input type="text" class="form-control" id="inputCP" name="CP" placeholder="Codigo Postal" data-toggle="tooltip" data-placement="top" title="CODIGO POSTAL" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputState">Municipio</label>
                <select type="text" class="form-control" id="inputCity" name="City" aria-placeholder="Ciudad" data-toggle="tooltip" data-placement="top" title="SELECCIONA TU CIUDAD" required>
                  <option selected>Escoger...</option>
                  <option>Abasolo</option>
                  <option>Acámbaro</option>
                  <option>Apaseo el Alto</option>
                  <option>Apaseo el Grande</option>
                  <option>Atarjea</option>
                  <option>Celaya</option>
                  <option>Comonfort</option>
                  <option>Coroneo</option>
                  <option>Cortazar</option>
                  <option>Cuerámaro</option>
                  <option>Doctor Mora</option>
                  <option>Dolores Hidalgo C.I.N.</option>
                  <option>Guanajuato</option>
                  <option>Huanímaro</option>
                  <option>Irapuato</option>
                  <option>Jaral del Progreso</option>
                  <option>Jerécuaro</option>
                  <option>Juventino Rosas</option>
                  <option>León</option>
                  <option>Manuel Doblado</option>
                  <option>Moroleón</option>
                  <option>Ocampo</option>
                  <option>Pénjamo</option>
                  <option>Pueblo Nuevo</option>
                  <option>Purísima del Rincón</option>
                  <option>Romita</option>
                  <option>Salamanca</option>
                  <option>Salvatierra</option>
                  <option>San Diego de la Unión</option>
                  <option>San Felipe</option>
                  <option>San Francisco del Rincón</option>
                  <option>San José Iturbide</option>
                  <option>San Luis de la Paz</option>
                  <option>San Miguel de Allende</option>
                  <option>Santiago Maravatío</option>
                  <option>Silao</option>
                  <option>Tarandacuao</option>
                  <option>Tarimoro</option>
                  <option>Tierra Blanca</option>
                  <option>Tarimoro</option>
                  <option>Uriangato</option>
                  <option>Valle de Santiago</option>
                  <option>Victoria</option>
                  <option>Villagrán</option>
                  <option>Xichú</option>
                  <option>Yuriria</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputState">Estado</label>
                <select type="text" class="form-control" id="inputState" name="State" aria-placeholder="Estado" data-toggle="tooltip" data-placement="top" title="SELECCIONA TU ESTADO" required>
                  <option>Guanajuato</option>
                </select>
              </div>
            </div>
            <div cl ass="form-row">
              <div class="form-group col-md-6">
                <label for="inputCountry">Pais/Region</label>
                <select type="text" class="form-control" id="inputCountry" name="Country" aria-placeholder="País" data-toggle="tooltip" data-placement="top" title="SELECCIONA TU PAIS" required>
                  <option>México</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputTel">Teléfono</label>
                <input type="text" class="form-control" id="inputTel" name="telefono" placeholder="Teléfono" data-toggle="tooltip" data-placement="top" title="INGRESA TU NUMERO DE TELEFONO" required>
              </div>
            </div>

          </div>

          <div class="receta ">
                  <div class="row justify-content-md-center">

                    <div class="col-sm-6 col-md-6 col-lg-6 col-6 txt-alg-left">
                      <i class="fa fa-times-circle-o cl-receta" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-12 txt-alg-right">
                      <i class="icon-medium"><img class="img-r" src="../images/science-cow.png"></i>
                    </div>

                  <div class="col-sm-18 col-md-18 col-lg-18 col-18 txt-alg-center">
                  <?php if($ip_p = 1 || $ip_p = 3 || $ip_p = 5 || $ip_p = 6 || $ip_p = 7 || $ip_p = 8 || $ip_p = 9 || $ip_p = 10 || $ip_p = 11 || $ip_p = 12 || $ip_p = 13 )  { ?>
                      <img style="width:200px; height:360px;" src="../images/nutricional-queso.png">
                    <?php } else if ( $ip_p = 2 || $ip_p = 4 || $ip_p = 15 || $ip_p = 16 ) { ?> 
                      <img src="../images/nutricional-yo.png">
                    <?php } else if($ip_p = 14) { ?>
                      <img src="../images/nutricional-crema.png">
                    <?php }  ?>
                  </div>
                  </div>
          </div>

          <div class="col-sm-12 col-md-4"><br>
            <div class="w3-dark-gray" style="width:100%; border-radius:15px; font-family:inherit; font-size: inherit; box-shadow:4px 4px 10px rgba(0,0,0,0.06);">
              &nbsp;
              <div class="w3-container w3-center">
                <div class="media tooltip-box">
                  <div class="pull-left">
                    <img src="/LaLaja/images/<?php echo $img; ?>" style="border-radius: 8px;" alt="imagen producto" width="300" height="200">
                  </div>
                  <span class="tooltip-info">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    Click para ver tabla nutricional
                  </span>
                </div>

                <h1><?php echo $datos['nombre']; ?> <?php echo $datos['peso']; ?></h1>
                <div class="w3-section">
                  <p><b><?php echo $datos['descripcion']; ?></b></p>
                  <p><b>¿Tienes un codigo de descuento?</b></p>
                  <p><b>Puedes usarlo aqui.</b></p>
                  <input style="color: black; margin-left: 15px; position:inherit;" class="form-control" type="text" name="descuento" placeholder="Codigó de descuento">
                </div>

                <div class="w3-section">
                  <p><b>Precio por pieza: </b>$<?php echo $datos['precio']; ?></p>
                  <p><b>Descuento del: </b><?php echo $datos['descuento'] * 100; ?>%</p>
                  <p><b>Envió</b> $99</p>
                </div>

                <div class="container" style="opacity: 0; display: none;">
                  <input type="number" class="form-control" id="id" name="id" value="<?php echo $datos['idProducto']; ?>" required>
                  <input type="number" class="form-control" id="price" name="price" value="<?php echo $datos['precio']; ?>" required>
                  <input type="number" class="form-control" id="descuento" name="descuento" value="<?php echo $datos['descuento'] ?>" required>

                </div>

                <div class="w3-section">
                  <label for="quantity"><b>Número de Quesos:</b></label><input style="color:black; border-radius: 8px;" type="number" value="1" id="quantity" name="cantidad" min="1" max="999" placeholder="0" required>
                  <!-- <p><b style="font-size: larger;">Total</b> MXN<b style="font-size: larger;">$217,50</b></p> -->
                </div>
              </div>
            </div>
          </div>
          &nbsp;
          <br>
          <button type="submit" style="text-align: center;" role="button" name="enviar" class="btn btn-success btn-lg btn-block"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Continuar
            con el envio</button>
          <hr>
        </form>
      </div><br>
    </div><br>

    <footer class="footer" style="color: white;">
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Conectanos por nuestras redes sociales:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a href="" class="me-4 text-reset">
            <i class="fa fa-facebook-f"></i>
          </a>&nbsp;
          <a href="" class="me-4 text-reset">
            <i class="fa fa-twitter"></i>
          </a>&nbsp;
          <a href="" class="me-4 text-reset">
            <i class="fa fa-instagram"></i>
          </a>&nbsp;
          <a href="" class="me-4 text-reset">
            <i class="fa fa-youtube"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>La Laja
              </h6>
              <p>
                Nuestro proposito es el entegarte productos de calidad.
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Nosotros
              </h6>
              <p>
                <a href="#!" class="text-reset">Acerca de</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Certificaciones</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Reclutamiento</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Ayuda y sugerencias</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Legales
              </h6>
              <p>
                <a href="#!" class="text-reset">Politica de privacidad</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Contacto
              </h6>
              <p><i class="fa fa-home me-3"></i> 38090, Cdad. Victoria 100, Rancho Seco, Celaya, Gto.</p>
              <p>
                <i class="fa fa-envelope me-3"></i>
                la_laja@prodigy.net.mx
              </p>
              <p><i class="fa fa-phone me-3"></i> (461) 6164147 | (461)6166013</p>
              <p><i class="fa fa-print me-3"></i> 01 555 861 2527</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="http://www.lacteoslalaja.com/">Lacteos La Laja</a>
      </div>

      <!-- Copyright -->
    </footer>
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="../js/index.js"></script>
</body>

</html>
