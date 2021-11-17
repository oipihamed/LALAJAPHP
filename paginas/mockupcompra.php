<?php
  require_once ('../models/Producto.php');
  require_once('./conexion.php');

  $sqlgrabar = "SELECT * FROM producto WHERE IdProducto = '".$_POST['id_p']."'";
    if (mysqli_query($conn, $sqlgrabar)) {
      $ordStatus = 'success';
      $resultado = mysqli_query($conn, $sqlgrabar);
      $datos=mysqli_fetch_array($resultado);
    } else {
      $statusMsg = "Error al momento de subir formulario, por favor vuelva a intentarlo.";
    };

    if ($_POST['id_p'] == 1) {
      $img = "../images/queso_oaxaca.jpg";
    } else if ($_POST['id_p'] == 2) {
      $img = "../images/productos-16.jpg";
    } else if ($_POST['id_p']== 3) {
      $img = "../images/productos-06.jpg";
    };

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
        <a class="navbar-brand logo" href="../index.php"><img src="http://www.lacteoslalaja.com/core/img/logo.png"
            alt="Logo"></a>
      </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="../index.php">Inicio</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <i class="icon-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="mockupcompra.html">Novedades</a></li>
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
      <div class="container"
        style="border-radius:15px; font-family:inherit; font-size: inherit; background-color: #fafafa; box-shadow:4px 4px 10px rgba(0,0,0,0.06);">
        <div class="status alert alert-success" style="display: none"></div>
        <div class="col-12">
          <h3>Información de contacto</h3>
          <h4>Por Favor ingresa tus datos.</h4>
        </div><br>
        <nav aria-label="Ruta de Navegación">
          <ol class="breadcrumb" role="list">
            <li class="breadcrumb__item breadcrumb__item--completed">
              <a class="breadcrumb__link" href="../index.php">Inicio <i class="fa fa-chevron-right"
                  aria-hidden="true"></i></a>
            </li>
            <li class="breadcrumb__item breadcrumb__item--completed">
              <a class="breadcrumb__link" href="../index.php">Productos <i class="fa fa-chevron-right"
                  aria-hidden="true"></i></a>
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
                <input type="email" class="form-control" id="inputEmail" placeholder="Ejemplo@lalaja.com" name="email"
                  required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputName">Nombre y Apellido</label>
                <input type="text" class="form-control" id="inputName" placeholder="Juan pérez" name="full_name"
                  required>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEnter">Empresa</label>
              <input type="text" class="form-control" id="inputEnter" name="empresa" placeholder="empresa(opcional)">
            </div>
            <div class="form-group col-md-6">
              <label for="inputStreet">Calle y Numero de casa</label>
              <input type="text" class="form-control" id="inputStreet" name="domicilio"
                placeholder="Calle y Numero de casa" required>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputAp">Apartamento, Local, etc</label>
                <input type="text" class="form-control" id="inputAp" name="tipoV" placeholder="(Opcional)">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCP">Codigo Postal</label>
                <input type="text" class="form-control" id="inputCP" name="CP" placeholder="Codigo Postal" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Ciudad</label>
                <input type="text" class="form-control" id="inputCity" name="City" placeholder="Ciudad" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputState">Estado</label>
                <select type="text" class="form-control" id="inputState" name="State" aria-placeholder="Estado"
                  required>
                  <option selected>Escoger...</option>
                  <option>Aguascalientes</option>
                  <option>Baja California</option>
                  <option>Baja California Sur</option>
                  <option>Campeche</option>
                  <option>Chiapas</option>
                  <option>Chihuahua</option>
                  <option>Ciudad de México</option>
                  <option>Coahuila de Zaragoza</option>
                  <option>Colima</option>
                  <option>Durango</option>
                  <option>Estado de Guerrero</option>
                  <option>Estado de Hidalgo</option>
                  <option>Estado de México</option>
                  <option>Guanajuato</option>
                  <option>Jalisco</option>
                  <option>Michoacán</option>
                  <option>Morelos</option>
                  <option>Nayarit</option>
                  <option>Nuevo León</option>
                  <option>Oaxaca</option>
                  <option>Puebla</option>
                  <option>Querétaro</option>
                  <option>Quintana Roo</option>
                  <option>San Luis Potosí</option>
                  <option>Sinaloa</option>
                  <option>Sonora</option>
                  <option>Tabasco</option>
                  <option>Tamaulipas</option>
                  <option>Tlaxcala</option>
                  <option>Veracruz</option>
                  <option>Yucatán</option>
                  <option>Zacatecas</option>
                </select>
              </div>
            </div>
            <div cl ass="form-row">
              <div class="form-group col-md-6">
                <label for="inputCountry">Pais/Region</label>
                <select type="text" class="form-control" id="inputCountry" name="Country" aria-placeholder="País"
                  required>
                  <option>México</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputTel">Teléfono</label>
                <input type="text" class="form-control" id="inputTel" name="telefono" placeholder="Teléfono" required>
              </div>
            </div>

          </div>

          <div class="col-sm-12 col-md-4"><br>
            <div class="w3-dark-gray"
              style="width:100%; border-radius:15px; font-family:inherit; font-size: inherit; box-shadow:4px 4px 10px rgba(0,0,0,0.06);">
              &nbsp;
              <div class="w3-container w3-center">
              <a href="#"><img src="<?php echo $img; ?>" style="border-radius: 8px;" alt="imagen producto" width="300" height="200"></a>
                
                <p><?php echo $datos['nombre']; ?> <?php echo $datos['peso']; ?></p>
                <div class="w3-section">
                  <p><b><?php echo $datos['descripcion']; ?></b></p>
                  <p><b>¿Tienes un codigo de descuento?</b></p>
                  <p><b>Puedes usarlo aqui.</b></p>
                  <input style="color: black; margin-left: 15px; position:inherit;" class="form-control" type="text"
                    name="descuento" placeholder="Codigó de descuento">
                </div>

                <div class="w3-section">
                  <p><b>Precio por pieza: </b>$<?php echo $datos['precio'];?></p>
                  <p><b>Envió</b> $99</p>
                </div>

                <div class="container" style="opacity: 0; display: none;">
                  <input type="number" class="form-control" id="price" name="price" value="<?php echo $datos['precio']; ?>" required>
                </div>

                <div class="w3-section">
                  <label for="quantity"><b>Número de Quesos:</b></label><input style="color:black; border-radius: 8px;"
                    type="number" value="1" id="quantity" name="cantidad" min="1" max="999" placeholder="0" required>
                  <!-- <p><b style="font-size: larger;">Total</b> MXN<b style="font-size: larger;">$217,50</b></p> -->
                </div>
              </div>
            </div>
          </div>
          &nbsp;
          <br>
          <button type="submit" style="text-align: center;" role="button" name="enviar"
            class="btn btn-success btn-lg btn-block"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Continuar
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
</body>

</html>