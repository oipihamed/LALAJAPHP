<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>

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
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="contacto.html">Contacto</a></li>

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

        <div class="row green-back">
            <h1>CONÓCENOS</h1>
        </div>
        <div class="row grey-back cont">
            <br>
            <div id="myCarousel" class="carousel slide center" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="container">
                <div class="row row-cols-12">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-5">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="carousel-img" src="../images/acerca-04.png" widht="800px">
                            </div>

                            <div class="item">
                                <img class="carousel-img" src="../images/acerca-02.png" widht="800px" >
                            </div>

                            <div class="item">
                                <img class="carousel-img" src="../images/acerca-01.png" widht="800px" >
                            </div>

                            <div class="item center">
                                <img class="carousel-img" src="../images/acerca-03.png" widht="800px" >
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            </div>
        </div>
        <div class="row green-back">
            <h1>¿QUIÉNES SOMOS?</h1>
        </div>
        <div class="row grey-back cont">
            <div class="container">
                <div class="row-col-12">
                    <div class="col-md-6">
                        <br>
                        <br>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse1"><h4>Responsabilidad</h4></a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p style="text-align:justify;">
                                            Respondiendo cada uno a su deber, implica una conducta consciente y 
                                            comprometida con sus labores y con el cumplimiento oportuno de estos.
                                        </p>
                                    </div>
                                </div>
                                <br>
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse2"><h4>Trabajo en Equipo</h4></a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p style="text-align:justify;">
                                            El trabajo en equipo como elemento constitutivo de la solidaridad colaborando 
                                            en proyectos comunes y multiplicando esfuerzos.
                                        </p>
                                    </div>
                                </div>
                                <br>
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse3"><h4>Respeto</h4></a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p style="text-align:justify;">
                                            Trato digno a todas las personas. Con una conducta prudente, en la que se ponga 
                                            en práctica las normas y reglamentos establecidos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="just">
                            <p style="text-align:justify;">
                            Somos una empresa 100% mexicana, dedicada a producción y comercialización de productos 
                            lácteos, contamos con más de 21 años de experiencia, trabajando a diario para ofrecer 
                            productos de confianza.
                            </p>
                            <p style="text-align:justify;">
                                <b>MISIÓN.</b> Ofrecer a las familias productos lácteos de calidad con estrictas 
                                normas de higiene, a través de un equipo de trabajo competitivo y responsable con 
                                su comunidad.
                            </p>
                            <p style="text-align:justify;">
                                <b>VISIÓN.</b> Producir y comercializar productos lácteos de calidad y de este modo 
                                permanecer en la mente y gusto de los consumidores, posicionándonos como una empresa 
                                líder.
                            </p>
                            <p style="text-align:justify;">
                                <b>VALORES.</b> Los valores que promueve Productos Lácteos La laja, son entendidos 
                                como principios de carácter universal que al ser ejecutados, se convierten en hábitos 
                                y permiten a la persona su perfeccionamiento a nivel individual con proyección social.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row green-back">
            <h1>PRODUCTOS LÁCTEOS LA LAJA</h1>
        </div>
        <div class="row grey-back cont row-col-12">
            <div class="col-md-1">

            </div>
            <div class="col-md-9">
                <br>
                <ul>
                    <li style="text-align:justify;">
                        <img src="../images/check_green_icon.png" alt="">
                            Inicio en 1986 por una inquietud para desarrollar un negocio del sector alimenticio, 
                            la empresa surge en el rancho la Laja municipio de Celaya, Guanajuato, de ahí su origen 
                            del nombre de la empresa.
                            <br>
                    </li>
                    <br>
                    <li style="text-align:justify;">
                        <img src="../images/check_green_icon.png" alt="">
                        En 1993 se inició la construcción de la primera parte de la empresa en la que actualmente estamos ubicados.
                        <br>
                    </li>
                    <br>
                    <li style="text-align:justify;">
                        <img src="../images/check_green_icon.png" alt="">
                        Productos Lácteos La Laja es una empresa que con su participación se ha expandido en la Ciudad de México, 
                        Michoacán, Querétaro y Guanajuato. Las marcas y/o productos que manejamos responden a las necesidades de 
                        cada uno de nuestros clientes ofreciendo precio y calidad.
                    </li>
                    
                </ul>
            </div>
            
        </div>
        
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