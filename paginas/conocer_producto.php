<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once('../config/Conexion.php');
require_once('./conexion.php');
$ip_p=0;
if(isset($_GET['id_p'])){
  $ip_p=$_GET['id_p'];
}else{
  $ip_p=$_POST['id_p'];
}
$query = "SELECT * FROM producto WHERE IdProducto = '$ip_p'";
$resultado=mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($resultado);
$img = $row["imagen"].".jpg"; 
$producto = $row["nombre"];    
$descripcion = $row["descripcion"]; 
$peso = $row["peso"];
$precio = $row["precio"];
$id = $row["idProducto"];
$query = "SELECT * FROM comentario WHERE IdProducto = '$ip_p'";
$resultado=mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($resultado);
$contenido = $row["contenido"];
$nombre = $row["nombre"];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conocer producto: <?php echo $producto;?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="/LaLaja/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/LaLaja/css/stylemockup.css">
    <link rel="stylesheet" href="/LaLaja/css/cards.css">
    <link rel="stylesheet" href="/LaLaja/css/index.css">
    <link rel="stylesheet" href="/LaLaja/css/chatbot.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Dancing+Script:wght@700&family=Meow+Script&family=Pacifico&family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>

    <nav id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="/LaLaja/index.php"><img
                        src="http://www.lacteoslalaja.com/core/img/logo.png" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/LaLaja/index.php">Inicio</a></li>
                    <li class="dropdown">
                        <a href="/LaLaja/paginas/productos.php" >Productos <i
                                class="icon-angle-down"></i></a>
                      <!--  <ul class="dropdown-menu">
                            <li><a href="/LaLaja/paginas/productos.php">Novedades</a></li>
                            <li class="divider"></li>
                            <li><a href="/LaLaja/paginas/productos.php">Promociones</a></li>
                            <li class="divider"></li>
                            <li><a href="/LaLaja/paginas/productos.php">General</a></li>
                        </ul>-->
                    </li>
                    <li><a href="nosotros.php">Nosotros</a></li>

                    <li><input type="text" id="buscador" class="form-control my-2"></input></li>
                    <li><i class="fa fa-search"></i></li>
                    <div id="respuesta"></div>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid" id="tooltip_container">
        <!--TOOL TIP-->
        <span class="abrir-chat abchat" data-toggle="tooltip" data-placement="top" title="ABRIR CHAT DE AYUDA"><i
                class="fa fa-question"></i></span>
        <!--FIN TOOL-->
        <!--TOOL TIP-->
        <span class="ir-arriba"><img src="/LaLaja/images/milk-icon-min-arrow.png" class="icon-milk"
                data-toggle="tooltip" data-placement="top" title="IR ARRIBA" alt=""></span>
        <!--FIN TOOL-->
        <!--CHAT BOT-->
        <div class="wrapper-chatbot not-visible">
            <div class="title">Chat de Ayuda<a class="fa fa-times close-chat"></a></div>
            <div class="form">
                <div class="bot-inbox inbox">
                    <div class="icon">
                        <img src="/LaLaja/images/vaca-chat.png" class="vaca-chat"></img>
                    </div>
                    <div class="msg-header">
                        <p>Hola bienvenido, ¿Como puedo ayudarte?</p>
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

        <div class="row">
        
            
        </div>
        </div>
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
                <a class="breadcrumb__link" href="/LaLaja/index.php">Inicio <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
              </li>
              <li class="breadcrumb__item breadcrumb__item--completed">
                <a class="breadcrumb__link" href="/LaLaja/paginas/productos.php">Productos <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
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
                  <h5 style="align-text:left;" class="titulo">Descripción</h5>
                  <p class="coment"><?php echo $producto;?> <?php echo $peso; ?></p>
                  <br>
                  <h5 class="titulo">Características importantes</h5>
                  <ul>
                    <li class="desc coment"><?php echo $descripcion; ?></li>
                  </ul>
                </div>
                <div class="col-md-5 producto">
                  <img src="../images/<?php echo $img; ?>" alt="" width="450 px">
                </div>
                <div class="col-md-3 agregar">
                  <h3  class="contador">$ <?php echo $precio; ?> / Kg</h3>
                 <!-- <div class="cantidad">
                    <input class="form-control " type="number" placeholder="1">
                  </div>-->
                  <br>
                  
                    <div class="container" style="opacity: 0; display: none;">
                      <input type="number" class="form-control" id="id_p" name="id_p" value="<?php echo $id; ?>">
                      
                    </div>
                    <div class="contador">
                    <button class="btn btn-block btn-success" type="submit" id="prod" name="prod">
                      <i class="fa fa-shopping-cart"></i> Agregar al carrito
                    </button>
                    </div>
                    <br>
                    <div class="contador">
                    <a class="btn btn-block btn-success" data-toggle="collapse" data-target="#info-nutri">
                        <i class="fa fa-yelp" aria-hidden="true"></i>Ver información nutricional</a>
                    </div>
                    

                    <div id="info-nutri" class="collapse">
                        <div class="txt-alg-center info-nutri">
                            <?php if($ip_p == 1 || $ip_p == 3 || $ip_p == 5 || $ip_p == 6 || $ip_p == 7 || $ip_p == 8 || $ip_p == 9 || $ip_p == 10 || $ip_p == 11 || $ip_p == 12 || $ip_p == 13 )  { ?>
                            <img style="width:200px; height:360px;" src="../images/nutricional-queso.png">
                            <?php } else if ( $ip_p == 2 || $ip_p == 4 || $ip_p == 15 || $ip_p == 16 ) { ?> 
                            <img style="width:200px; height:360px;" src="../images/nutricional-yo.png">
                            <?php } else if($ip_p == 14) { ?>
                            <img style="width:200px; height:360px;" src="../images/nutricional-crema.png">
                            <?php }  ?>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-8">
                    <hr>
                    <p class="titulo">Opiniones</p>
                    <br>
                    <?php 
                        foreach($resultado as $row){
                            ?>
                            <div class="tarjeta">
                                <div class="contenedor">
                                    <div class="row col-12">
                                        <div class="col-md-10">
                                            <p class="nombre"><?php echo $row["nombre"];?></p>
                                        </div>
                                        <div class="col-md-2">
                                            <p><?php echo $row["fecha"];?></p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="coment"><?php echo $row["contenido"];?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <?php
                        }
                    ?>
                </div>
              </div>
            </div>
            </b>
          <br>
        </div>
      </div><br>
    </div><br>

    <footer class="footer">
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
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
                            Conocer producto 
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
                            <a class="text-reset abchat">Ayuda y sugerencias</a>
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






    <!--Scripts JS Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="/LaLaja/js/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <scrip srce="/LaLaja/bootstrap-5.1.3-dist/js/bootstrap.bundle.js">
        </script>
        <scrip srce="/LaLaja/bootstrap-5.1.3-dist/js/bootstrap.bundle.js.map">
            </script>
            <script src="/LaLaja/js/index.js"></script>
            <script src="/LaLaja/js/productos.js"></script>

</body>

</html>

</html>
