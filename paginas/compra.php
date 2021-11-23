<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once('../config/Conexion.php');
require_once('./conexion.php');

require_once('../vendor/autoload.php');
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
require '../phpmailer/src/Exception.php';

$payment_id = $statusMsg = $api_error = '';
$ordStatus = 'error';

if (isset($_POST['enviar'])) {
  if (!empty($_POST['email']) && !empty($_POST['full_name']) && !empty($_POST['domicilio']) && !empty($_POST['CP']) && !empty($_POST['City']) && !empty($_POST['State']) && !empty($_POST['Country']) && !empty($_POST['telefono'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['full_name'];
    $domicilio = $_POST['domicilio'];
    $CP = $_POST['CP'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $country = $_POST['Country'];
    $telefono = $_POST['telefono'];
    $cantidad = $_POST['cantidad'];
    $descuento = $_POST['descuento'];
    $price = $_POST['price'];

    $sqlgrabar = "SELECT * FROM producto WHERE IdProducto = ' $id '";
    if (mysqli_query($conn, $sqlgrabar)) {
      $ordStatus = 'success';
      $resultado = mysqli_query($conn, $sqlgrabar);
      $datos = mysqli_fetch_array($resultado);
    } else {
      $statusMsg = "Error al momento de subir formulario, por favor vuelva a intentarlo.";
    };

    $date = date("Y-m-d H:i:s");
    $hours = '24:00:00';

    $d0 = strtotime(date('Y-m-d 00:00:00'));
    $d1 = strtotime(date('Y-m-d ') . $hours);

    $sumTime = strtotime($date) + ($d1 - $d0);
    $new_time = date("Y-m-d H:i:s", $sumTime);

    $subtotal = ($price - ($price * $datos['descuento'])) * ($cantidad);

    if ($subtotal >= 100) {
      $envio = 0;
    } else {
      $envio = 99;
    };


    $total = $subtotal + $envio;
    $product = $datos['nombre'];

    $mensajeCliente = "<html>" .
      "<head><title>Gracias por tu preferencia</title>" .
      "<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-size: 16px;
  font-weight: 300;
  color: #888;
  background-color:rgba(230, 225, 225, 0.5);
  line-height: 30px;
  text-align: center;
}
.contenedor{
  width: 80%;
  min-height:auto;
  text-align: center;
  margin: 0 auto;
  padding: 40px;
  background: #ececec;
  border-top: 3px solid #84e619;
}
.bold{
  color:#333;
  font-size:25px;
  font-weight:bold;
}
img{
  margin-left: auto;
  margin-right: auto;
  display: block;
  padding:0px 0px 20px 0px;
}
</style>
</head>" .
      "<body>" .
      "<div class='contenedor'>" .
      "<p>&nbsp;</p>" .
      "<p>&nbsp;</p>" .
      "<span>Felicitaciones <strong class='bold'>" . $name . " ...</strong></span>" .
      "<p>&nbsp;</p>" .
      "<p>Su compra esta en camino...</p> " .
      "<p>&nbsp;</p>" .
      "<p>&nbsp;</p>" .
      "<p><strong>Su(s) producto(s): </strong> " . $datos['nombre'] . " </p>" .
      "<p><strong>Aproximadamente llegara el dia: </strong> " . $new_time . " </p>" .
      "<p>&nbsp;</p>" .
      "<p>¡Gracias por su preferencia.</p>" .
      "<p>&nbsp;</p>" .
      "<p><span class='bold'> Un saludo de parte de toda la familia de la laja! </span></p>" .
      "<p>&nbsp;</p>" .
      "<p>" .
      "<a title='lalaja' href='http://www.lacteoslalaja.com/'>" .
      "<img src='http://www.lacteoslalaja.com/core/img/logo.png' alt='Logo' width='100px'/>" .
      "</a>" .
      "</p>" .
      "<p><strong>En caso de incoveniente comunicate con nosotros por: (461) 6164147, o por email: lalajacelaya@gmail.com</strong> </p>" .
      "</div>" .
      "</body>" .
      "</html>";


    $sqlgrabar = "INSERT INTO compra(email, name, domicilio, CP, City, State, Country, telefono, fechapedido, fechaentrega, cantidad, producto, codigoDescuento, total) values ('$email', '$name','$domicilio','$CP','$City','$State','$country','$telefono','$date','$new_time','$cantidad','$product','$descuento','$total')";
    if (mysqli_query($conn, $sqlgrabar)) {
      $ordStatus = 'success';
      $statusMsg = 'Muchas gracias por tu compra!!';

      $mail = new PHPMailer(true);

      try {
        //$mail->SMTPDebug =SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'lalajacelaya@gmail.com';
        $mail->Password = 'quesoderancho';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('lalajacelaya@gmail.com', 'La laja');
        $mail->addAddress($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'Gracias por tu compra';
        $mail->Body = $mensajeCliente;
        $mail->send();
      } catch (Exception $e) {
        echo 'Mensaje ' . $mail->ErrorInfo;
      }
    } else {
      $statusMsg = "Error al momento de subir formulario, por favor vuelva a intentarlo.";
    }
  };
};
?>

<!DOCTYPE html>
<html lang="es">

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
</head>

<body style="color: #34495E;">
  <nav id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand logo" href="./index.css"><img src="http://www.lacteoslalaja.com/core/img/logo.png" alt="Logo"></a>
      </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="./index.php">Inicio</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <i class="icon-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="./paginas/conocer_producto.php">Novedades</a></li>
              <li class="divider"></li>
              <li><a href="./paginas/conocer_producto.php">Promociones</a></li>
              <li class="divider"></li>
              <li><a href="./paginas/conocer_producto.php">General</a></li>
            </ul>
          </li>
          <li><a href="contacto.html">Contacto</a></li>

          <li><input type="text" id="buscador" class="form-control my-2"></input></li>
          <li><i class="fa fa-search"></i></li>
          <div id="respuesta"></div>
        </ul>
      </div>
    </div>
  </nav>
  <div class="row">
    <div class="green-back">
      <br>
      <h1>Disfruta de la mejor calidad</h1><br>
    </div>
    <div class="row grey-back">
      <div class="container">
        <div class="status alert alert-success" style="display: none"></div>
        <form id="main-contact-form">
          <div class="col-12">
            <h3>Información de contacto</h3>
          </div><br>
          <nav aria-label="Ruta de Navegación">
            <ol class="breadcrumb" role="list">
              <li class="breadcrumb__item breadcrumb__item--completed">
                <a class="breadcrumb__link" href="../index.php">Inicio 
                  <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
              </li>
              <li class="breadcrumb__item breadcrumb__item--completed">
                <a class="breadcrumb__link" href="../index.php">Productos 
                  <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
              </li>
              <li class="breadcrumb__item breadcrumb__item--completed ">
              <a class="breadcrumb__link">Información</a>
              <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </li>
              <li class="breadcrumb__item breadcrumb__item--current" aria-current="step">
                <span class="breadcrumb__text"><b>Envío</b></span>
              </li>
            </ol>
          </nav>
          <div class="container" style="font-size:medium; border-radius:15px; font-family:inherit; font-size: inherit; background-color: #fafafa; box-shadow:4px 4px 10px rgba(0,0,0,0.06);">
            <div class="status" style="font-size:large; text-align: left;  font-family:monospace" >
              <br>
              <b>
                <h1 class="<?php echo $ordStatus; ?>" style="font-size:medium; text-align: center;"><b><?php echo $statusMsg; ?></b></h1>
              </b>
              <?php if (!empty($email)) { ?>
                <h3 style="text-align: center;">Recuerda tomar captura de pantallas, por si acaso.</h3>
                <h4 style="text-align: center;"><b>Información de la orden</b></h4>
                <p><b>Domicilio de entrega: </b> <?php echo $domicilio . ' ' . $CP . ' ' . $City . ' ' . $State . ' ' . $country; ?></p>
                <p><b>Contacto: </b> <?php echo $email . ' ' . $telefono; ?></p>
                <p><b>Fecha de orden: </b> <?php echo $date; ?></p>
                <p><b>Fecha de entrega(estimada): </b> <?php echo $new_time; ?></p>
                <h1 style="text-align: center;"><b>Costo</h1>
                <p><b>Producto: </b> <?php echo $datos['nombre']; ?></p>
                <p><b>Cantidad: </b> <?php echo $cantidad ?></p>
                <p><b>Costo de Envió: </b> Si el precio de tu compra es mayor a 100$ el envio va de nuestra parte(Gratis)</p>
                <br>
                <p><b>Subtotal: </b> <?php echo $subtotal ?></p>
                <p><b>Envio: </b> <?php echo $envio ?></p>
                <p><b>Costo Total: </b> <?php echo $total; ?></p>
                <br>
                <p style="text-align: center;">Garantizamos el 100% de nuestras entregas si llegara a ocurrir un incoveniente</p>
            </div>
            <a href="../index.php" type="button" class="btn btn-success btn-lg btn-block " style="font-size: large;"><i class="fa fa-cart-plus" aria-hidden="true"></i> Continua conocinedo nuestros productos</a>
          <?php } else { ?>
            <a href="./mockupcompra.html" type="button" class="btn btn-success btn-lg btn-block" style="font-size: large;"><i class="fa fa-fast-backward" aria-hidden="true"></i> Lo sentimos vuelva a intentarlo</a>
          <?php } ?>
          <br>
          </div>
      </div><br>
    </div><br>

    <footer class="footer" style="color: white; background:#252525;">
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
</body>

</html>
