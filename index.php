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
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/chatbot.css">
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <i
                                class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/LaLaja/paginas/productos.php">Novedades</a></li>
                            <li class="divider"></li>
                            <li><a href="/LaLaja/paginas/productos.php">Promociones</a></li>
                            <li class="divider"></li>
                            <li><a href="/LaLaja/paginas/productos.php">General</a></li>
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
    <div class="container-fluid">
        <div class="row ">
            <div class="container-fluid txt-wh">
                <!--TOOL TIP-->
                <span class="abrir-chat abchat"><i class="fa fa-question"></i></span>
                <!--FIN TOOL-->
                <!--TOOL TIP-->
                <span class="ir-arriba"><img src="/LaLaja/images/milk-icon-min-arrow.png" class="icon-milk" alt=""></span>
                <!--FIN TOOL-->
                <div class="wrap-iconos">
                    <!--CHAT BOT-->
                    <div class="wrapper-chatbot not-visible">
                        <div class="title">Chat de Ayuda<a class="fa fa-times close-chat"></a></div>
                        <div class="form">
                            <div class="bot-inbox inbox">
                                <div class="icon">
                                    <img src="images/vaca-chat.png" class="vaca-chat"></img>
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
                    <h3>Lacteos La Laja te ofrece</h3>
                    <p>Distintos productos lácteos de alta calidad elaborados por manos guanajuatenses, en la región
                        Laja-Bajío.</p>
                </div><br>

                <div class="row">
                    <div class="row  icons" id="tooltip_container">
                        <div class="media tooltip-box">
                            <span class="tooltip-info">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                Dar click para ver recetas
                            </span>
                            <div class="pull-left">
                                <i class="icon-medium"><img class="img-i" src="images/queso.png"></i>
                            </div>

                            <div class="media-body">
                                <h4 class="media-heading">Quesos</h4>
                                <p class="">Amplia variedad de quesos, así como distintas presentaciones para deleitar
                                    tu paldar.</p>
                            </div>


                        </div>
                        <div class="receta ">

                            <div class="row justify-content-md-center">

                                <div class="col-sm-6 col-md-6 col-lg-6 col-6 txt-alg-left">
                                    <i class="fa fa-times-circle-o cl-receta" aria-hidden="true"></i>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-12 txt-alg-right">
                                    <i class="icon-medium"><img class="img-r" src="images/vaca-cocinando.png"></i>

                                </div>
                            </div>
                            <img src="images/dedos-queso.png" class="img-al" alt="">

                            <div class="row justify-content-md-center wrap-content-recipe">
                                <div class="col-md-12 recipe">
                                    <div class="text-receta">
                                        <h3> DEDOS DE QUESO LA LAJA</h3>
                                        <p>Esta receta de dedos de queso es ideal para los chiquitines, el queso
                                            empanizado lleva unas especies italianas que le dan un sabor original,
                                            pruébalas.</p>

                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-6 wrap-list-ing">
                                    <h5>INGREDIENTES PARA 4 PERSONAS</h5>
                                    <div class="ingredientes-l">
                                        <ul class="list-ing">
                                            <li>400 gr <a href="paginas/mockupcompra.php?id_p=1"><strong
                                                        class="n tooltip-box">Queso
                                                        <span class="tooltip-info">
                                                            <img src="images/img-1.jpg" class="img-ing-su" alt="">
                                                        </span>
                                                    </strong>
                                                </a>
                                            </li>
                                            <li>1 taza <strong>Harina</strong></li>
                                            <li>2 <strong>Huevos</strong></li>
                                            <li>2 tazas de <strong>Pan Molido</strong> extra crunch</li>
                                            <li> 1 cucharada <strong>Perejil finamente picado</strong></li>
                                            <li>2 tazas <strong>Aceite</strong> </li>
                                            <li><strong>Sal</strong> al gusto</li>
                                            <li><strong>Pimienta</strong> al gusto</li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 wrap-list-step">
                                    <h4>PASOS:</h4>
                                    <ol>
                                        <li>En un recipiente hondo mezcle los huevos y el agua.</li>
                                        <li>En otro recipiente mezcle el pan molido, la sal de ajo, la albahaca, y el
                                            orégano.</li>
                                        <li>En un tercer recipiente hondo mezcle la harina y la maicena.</li>
                                        <li>Caliente en un sartén grande el aceite hasta que esté listo para freír.</li>
                                        <li>Corte el queso manchego en rectángulos (los dedos) y pase cada uno por la
                                            mezcla de la harina, luego la de los huevos y por último la del pan molido.
                                        </li>
                                        <li>Fría cada dedo hasta que este dorado (aproximadamente 45 segundos) y seque
                                            muy bien con una toalla de papel para remover la grasa.
                                        </li>
                                    </ol>


                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-medium"><img class="img-i"
                                    src="http://www.lacteoslalaja.com/core/img/crema.png"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Crema</h4>
                            <p>Contamos con crema natural y media crema, deliciosa y fresca.</p>
                        </div>
                    </div>

                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-medium"><img class="img-i"
                                    src="http://www.lacteoslalaja.com/core/img/yogh.png"></i>
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

    <div class="row green-back">
        <div class="row" id="row-card-prod">
        </div>
    </div>
    <div class="row" id="row-card-not">
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
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="http://www.lacteoslalaja.com/">Lacteos La Laja</a>
        </div>
        <!-- Copyright -->
    </footer>






    <!--Scripts JS Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="./js/index.js"></script>
    <script src="./js/cards.js"></script>
</body>

</html>

<!--Card Noticia
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
-->