<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once('../config/Conexion.php');
require_once('./conexion.php');

$query = "SELECT * FROM producto WHERE IdProducto = '".$_POST['id_p']."'";
$resultado=mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($resultado);
$img = $row["imagen"]; 
$producto = $row["nombre"];    
$descripcion = $row["descripcion"]; 
$peso = $row["peso"];
$precio = $row["precio"];
$id = $row["idProducto"];
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
        <a class="navbar-brand logo" href="../index.php"><img src="http://www.lacteoslalaja.com/core/img/logo.png" alt="Logo"></a>
      </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="../index.php">Inicio</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <i class="icon-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="./mockupcompra.html">Novedades</a></li>
              <li class="divider"></li>
              <li><a href="#">Promociones</a></li>
              <li class="divider"></li>
              <li><a href="#">General</a></li>
            </ul>
          </li>
          <li><a href="#">Contacto</a></li>
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
        <form id="main-contact-form" action="mockupcompra.php" method="post">
          <div class="col-12">
            <h3>Detalles del producto</h3>
          </div><br>
          <nav aria-label="Ruta de Navegación">
            <ol class="breadcrumb" role="list">
              <li class="breadcrumb__item breadcrumb__item--completed">
                <a class="breadcrumb__link" href="../index.php">Inicio <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
              </li>
              <li class="breadcrumb__item breadcrumb__item--completed">
                <a class="breadcrumb__link" href="../index.php">Productos <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
              </li>
              <li class="breadcrumb__item breadcrumb__item--current" aria-current="step">
                <span class="breadcrumb__text"><b><?php echo $producto; ?></b></span>
              </li>
            </ol>
          </nav>
          <div class="container" style="font-size:medium; border-radius:15px; font-family:inherit; font-size: inherit; background-color: #fafafa; box-shadow:4px 4px 10px rgba(0,0,0,0.06);">
            <div class="status" style="font-size:medium; text-align: left">
              <br>
              <b>
              <div class="row">
                <div class="col-md-3" id="descripcion">
                  <h5 style="align-text:left;"><b>Descripción</b></h5>
                  <p><?php echo $producto;?> <?php echo $peso; ?></p>
                  <br>
                  <h5><b>Características importantes</b></h5>
                  <ul>
                    <li class="desc"><?php echo $descripcion; ?></li>
                  </ul>
                </div>
                <div class="col-md-5 producto">
                  <img src="../images/<?php echo $img; ?>" alt="" width="450 px">
                </div>
                <div class="col-md-3 agregar">
                  <h3  class="contador">$ <?php echo $precio; ?> / Kg</h3>
                  <div class="cantidad">
                    <input class="form-control " type="number" placeholder="1">
                  </div>
                  <br>
                  
                    <div class="container" style="opacity: 0; display: none;">
                      <input type="number" class="form-control" id="id_p" name="id_p" value="<?php echo $id; ?>">
                      
                    </div>
                    <div class="contador">
                    <button class="btn btn-block btn-success" type="submit" id="prod" name="prod">
                      <i class="fa fa-shopping-cart"></i> Agregar al carrito
                    </button>
                    </div>
                    
                </div>
              </div>
            </div>
            </b>
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