<?php
require_once('conexion.php');

$payment_id = $statusMsg = $api_error = '';
$ordStatus = 'error';

if (isset($_POST['enviar'])) {
    if (!empty($_POST['email']) && !empty($_POST['full_name']) && !empty($_POST['domicilio']) && !empty($_POST['CP']) && !empty($_POST['City']) && !empty($_POST['State']) && !empty($_POST['Country']) && !empty($_POST['telefono'])) {
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

        $date = date("Y-m-d H:i:s");
        $hours = '24:00:00';

        $d0 = strtotime(date('Y-m-d 00:00:00'));
        $d1 = strtotime(date('Y-m-d ').$hours);

        $sumTime = strtotime($date) + ($d1 - $d0);
        $new_time = date("Y-m-d H:i:s", $sumTime);

        $price = 217.50;
        $product = "Queso Oaxaca La Laja 1kg";
        $total = $price * $cantidad;
        

        $sqlgrabar = "INSERT INTO compra(email, name, domicilio, CP, City, State, Country, telefono, fechapedido, fechaentrega, cantidad, producto, codigoDescuento, total) values ('$email', '$name','$domicilio','$CP','$City','$State','$country','$telefono','$date','$new_time','$cantidad','$product','$descuento','$total')";
        if (mysqli_query($conn, $sqlgrabar)) {
          $ordStatus = 'success';
          $statusMsg = 'Muchas gracias por tu compra!!';
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
        <a class="navbar-brand logo" href="http://www.lacteoslalaja.com"><img
            src="http://www.lacteoslalaja.com/core/img/logo.png" alt="Logo"></a>
      </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="http://www.lacteoslalaja.com">Inicio</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <i class="icon-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="acerca.html">Novedades</a></li>
              <li class="divider"></li>
              <li><a href="privacidad.html">Promociones</a></li>
              <li class="divider"></li>
              <li><a href="privacidad.html">General</a></li>
            </ul>
          </li>
          <li><a href="contacto.html">Contacto</a></li>
          <li><a href=""><i class="fa fa-search"></i> Buscar</a></li>
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
                <a class="breadcrumb__link" href="mockupcompra.html">Información</a>
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </li>
              <li class="breadcrumb__item breadcrumb__item--current" aria-current="step">
                <span class="breadcrumb__text"><b>Envío</b></span>
              </li>
            </ol>
          </nav>
      <div class="container p-3 my-3 bg-dark text-whitep-3 my-3 bg-dark text-white" style="font-size:medium;">
         <div class="status" style="font-size:medium;">
            <br>
            <h1 class="<?php echo $ordStatus; ?>" style="font-size:medium;"><?php echo $statusMsg; ?></h1>
            <?php if (!empty($email)) { ?>
                <h3>Recuerda tomar captura de pantallas, por si acaso.</h3>
                <h4>Información de la orden</h4>
                <p><b>Domicilio de entrega:</b> <?php echo $domicilio . ' ' . $CP . ' ' . $City . ' ' . $State . ' ' . $country; ?></p>
                <p><b>Contacto:</b> <?php echo $email. ' ' . $telefono; ?></p>
                <p><b>Fecha de orden:</b> <?php echo $date; ?></p>
                <p><b>Fecha de entrega(estimada):</b> <?php echo $new_time; ?></p>
                <h1><b>Costo</h1>
                <p><b>Cantidad:</b> <?php echo $cantidad ?></p>
                <p><b>Costo de Envió: </b> Si el precio de tu compra es mayor a 100$ el envio va de nuestra parte(Gratis)</p>
                <p><b>Costo Total:</b> <?php echo $total;?></p>
                <br>
                <p>Garantizamos el 100% de nuestras entregas si llegara a ocurrir un incoveniente</p>
        </div>
        <a href="./inicio.html" type="button" class="btn btn-info btn-lg btn-block " style="font-size: xx-large;">Continua conocinedo nuestros productos <i class="fa fa-cart-plus" aria-hidden="true"></i></i> </a>
            <?php } else { ?>
                <a href="./mockupcompra.html" type="button" class="btn btn-info btn-lg btn-block" style="font-size: xx-large;">Lo sentimos vuelva a intentarlo <i class="fa fa-fast-backward" aria-hidden="true"></i> </a> 
            <?php } ?>
    </div>
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
</body>
</html>