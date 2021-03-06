<?php

?>
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
    <link rel="stylesheet" href="/LaLaja/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/LaLaja/css/stylemockup.css">
    <link rel="stylesheet" href="/LaLaja/css/cards.css">
    <link rel="stylesheet" href="/LaLaja/css/index.css">
    <link rel="stylesheet" href="/LaLaja/css/chatbot.css">
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
                       <!-- <ul class="dropdown-menu">
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
                        <p>Hola bienvenido, ??Como puedo ayudarte?</p>
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
            <div class="col-12-p">
            <label for="txtBuscar">Nombre del producto:</label>
                <input type="email" class="form-control" placeholder="Nombre del producto" id="txtBuscar">
                <label for="selTipo">Tipo de producto:</label>
                <select class="form-control" aria-label="Default select example" id="selTipo">
                    <option value="" selected>Cualquier tipo</option>
                    <option value="1" selected>Queso</option>
                    <option value="2">Yoghurt</option>
                    <option value="3">Crema</option>
                </select>
                <label for="selOrden">Ordenar por:</label>
                <select class="form-control" aria-label="Default select example" id="selOrden">
                    <option value="numLikes" selected>Numero de Likes</option>

                    <option value="totalComentarios">Numero de comentarios</option>
                    <option value="precio">Precio</option>
                    <option value="descuento">Descuento</option>
                    <option value="peso">Peso</option>
                    <option value="tipo">Tipo</option>
                    <option value="nombre">Nombre</option>

                </select>
                <label for="selAsc">Tipo orden:</label>
                <select class="form-control" aria-label="Default select example" id="selAsc">
                    <option value="asc" selected>Ascendente</option>
                    <option value="desc">Descendente</option>
               

                </select>
                <button class="button-53 bt53-search" role="button" onClick="javascript:mostrarTipo()"
                    data-toggle="tooltip" data-placement="top" title="BUSCAR PRODUCTOS"> <i class="fa fa-search"></i>
                    Buscar</button>

            </div>


        </div>
        <div class="row green-back">

            <div class="row" id="row-card-prod">

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
            ?? 2021 Copyright:
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