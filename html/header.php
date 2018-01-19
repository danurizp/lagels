<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $titulo_pagina ?></title>

        <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">

        <link href="https://fonts.googleapis.com/css?family=Capriola" rel="stylesheet">

        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.css">

        <link rel="stylesheet" href="./css/owl.carousel.min.css">
        <link rel="stylesheet" href="./css/owl.theme.default.min.css">

        <link rel="stylesheet" href="./css/animate.css">

        <link type="text/css" rel="stylesheet" href="css/principal.css" />
        <?php echo $estilos_extra; ?>
    </head>

    <body >
        <main>
            <header>
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid nav-header">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#inicio"><div class="tit-lagels"><img src="img/logo3.png" alt="Lagels"/><img src="img/lambsie.png" alt="Borregito" class="wow swing"/></div></a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">


                                <?php
                                if ($pag_index) {
                                    ?>
                                    <li class="active"><a href="#inicio">Inicio</a></li>
                                    <li><a href="#mision">Misión</a></li>
                                    <li><a href="#vision">Visión</a></li>
                                    <?php
                                }
                                ?>

                                <?php
                                if (count($destacados) > 0) {
                                    ?>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Destacados<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <?php
                                            foreach ($destacados as $key => $value) {
                                                echo "<li><a href='#$key'>{$value['titulo']}</a></li>";
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <?php
                                }
                                ?>
                                <?php
                                if ($ubicacion) {
                                    ?>
                                    <li><a href="#ubicacion">Ubicación</a></li>
                                    <?php
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- /encabezado -->

            <div class="clear-header" id="inicio"></div>

