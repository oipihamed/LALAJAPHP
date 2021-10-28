<?php
 include ("config/Conexion.php");
 $con=new Conexion();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'> 
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/stylemockup.css">  
    <link rel="stylesheet" href="./css/cards.css">
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
                <a class="navbar-brand logo" href="./index.css"><img src="http://www.lacteoslalaja.com/core/img/logo.png" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="./index.css">Inicio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                           <li><a href="./paginas/mockupcompra.html">Novedades</a></li>                            
                            <li class="divider"></li>
                            <li><a href="#">Promociones</a></li>
                            <li class="divider"></li>
                            <li><a href="#">General</a></li>
                        </ul>
                    </li>
                    <li><a href="contacto.html">Contacto</a></li>
                    <li><a href=""><i class="fa fa-search"></i> Buscar</a></li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container-fluid">
   <div class="row ">
    <div class="container txt-wh">
        <div class="center gap">
            <h3>Lacteos La Laja te ofrece</h3>
            <p>Distintos productos lácteos de alta calidad elaborados por manos guanajuatenses, en la región Laja-Bajío.</p>
        </div><br>
        <div class="row">
            <div class="row-fluid icons">
                <div class="col-sm-4 col-md-4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-small"><img src="http://www.lacteoslalaja.com/core/img/queso.png"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Quesos</h4>
                            <p>Amplia variedad de quesos, así como distintas presentaciones para deleitar tu paldar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-medium"><img src="http://www.lacteoslalaja.com/core/img/crema.png"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Crema</h4>
                            <p>Contamos con crema natural y media crema, deliciosa y fresca.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-medium"><img src="http://www.lacteoslalaja.com/core/img/yogh.png"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Yoghurt</h4>
                            <p>Delicioso yoghurt en diversas presentaciones, ideal para tu familia y tu negocio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
   
  <div class="row green-back">
    <div class="row-card">
        <div class="example-1 card">
            <div class="wrapper">
                <div class="date">
                    <span class="day">10%</span>
                    <span class="month">DESC</span>
                    <span class="year"><strike>$100</strike></span>
                    <span class="day"><b>$90</b></span>
                </div>
                <div class="data">
                    <div class="content">
                     
                        <h1 class="title"><a href="./paginas/mockupconocer.html">Queso Oaxaca la laja 1 KG</a></h1>
                        <p class="text">Queso tipo oaxaca hecho puro de vaca.</p>
                        <label for="show-menu-1" class="menu-button"><span></span></label>
                    </div>
                    <input type="checkbox" id="show-menu-1" />
                    <ul class="menu-content">
                        <li>
                            <a href="./paginas/mockupcompra.html" class="fa fa-shopping-cart"></a>
                        </li>
                        <li><a href="#" class="fa fa-heart-o"><span>47</span></a></li>
                        <li><a href="#" class="fa fa-comment-o"><span>8</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="example-2 card">
            <div class="wrapper img-1">
                <div class="header">
                    <div class="date">
                        <span class="day">12</span>
                        <span class="month">Agosto</span>
                        <span class="year">2021</span>
                    </div>
                    <ul class="menu-content">
                        <li>
                        </li>
                        <li><a href="#" class="fa fa-heart-o"><span>18</span></a></li>
                        <li><a href="#" class="fa fa-comment-o"><span>3</span></a></li>
                    </ul>
                </div>
                <div class="data">
                    <div class="content">
                        <span class="author">La Laja</span>
                        <h1 class="title"><a href="#">Unete a nuestro grupo de trabajo</a></h1>
                        <p class="text">Se parte del grupo de trabajo quesos LaLaja, ofrecemos sueldo competitivo, capacitacion y beneficios, solo es necesario traer tu documentacion y seguir los pasos en descritos ...</p>
                        <a href="#" class="button">Leer mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="row-card">
        <div class="example-1 card">
            <div class="wrapper img-2">
                <div class="date">
                    <span class="day">10%</span>
                    <span class="month">DESC</span>
                    <span class="year"><strike>$150</strike></span>
                    <span class="day"><b>$135</b></span>
                </div>
                <div class="data">
                    <div class="content">
                      
                        <h1 class="title"><a href="#">Yoghurt Lari 4 KG</a></h1>
                        <p class="text">Yoghurt hecho a base de leche de cabra en distintos sabores.</p>
                        <label for="show-menu" class="menu-button"><span></span></label>
                    </div>
                    <input type="checkbox" id="show-menu" />
                    <ul class="menu-content">
                        <li>
                            <a href="#" class="fa fa-shopping-cart"></a>
                        </li>
                        <li><a href="#" class="fa fa-heart-o"><span>47</span></a></li>
                        <li><a href="#" class="fa fa-comment-o"><span>8</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="example-1 card">
            <div class="wrapper img-3">
                <div class="date">
                    <span class="day">10%</span>
                    <span class="month">DESC</span>
                    <span class="year"><strike>$40</strike></span>
                    <span class="day"><b>$36</b></span>
                </div>
                <div class="data">
                    <div class="content">
                  
                        <h1 class="title"><a href="#">Queso Panela la laja 1.6 KG</a></h1>
                        <p class="text">Queso panela bajo en calorias, hecho con leche pura de vaca.</p>
                        <label for="show-menu-4" class="menu-button"><span></span></label>
                    </div>
                    <input type="checkbox" id="show-menu-4"/>
                    <ul class="menu-content">
                        <li>
                            <a href="#" class="fa fa-shopping-cart"></a>
                        </li>
                        <li><a href="#" class="fa fa-heart-o"><span>27</span></a></li>
                        <li><a href="#" class="fa fa-comment-o"><span>5</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>  
  </div>
</div>

<footer class="footer">
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






    <!--Scripts JS Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
    <script src="./js/index.js"></script>
    <script src="./js/cards.js"></script>
</body>

</html>