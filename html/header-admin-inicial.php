<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $titulo_pagina; ?></title>

        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $pos_dir;?>img/favicon-32x32.png">

        <link href="https://fonts.googleapis.com/css?family=Capriola" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo $pos_dir;?>css/reset.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.css">
        
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="<?php echo $pos_dir;?>css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo $pos_dir;?>css/owl.theme.default.min.css">

        <link rel="stylesheet" href="<?php echo $pos_dir;?>css/animate.css">

        <link type="text/css" rel="stylesheet" href="<?php echo $pos_dir;?>css/principal.css" />
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
                            <a class="navbar-brand" href="#inicio"><div class="tit-lagels"><img src="<?php echo $pos_dir;?>img/logo3.png" alt="Lagels"/><img src="<?php echo $pos_dir;?>img/lambsie.png" alt="Borregito" class="wow swing"/></div></a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                
                                
                                
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administración<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="../categorias">Categorías</a></li>
                                        
                                        <?php
                                        /*foreach ($destacados as $key => $value) {
                                            echo "<li><a href='#$key'>{$value['titulo']}</a></li>";
                                        }*/
                                        ?>
                                    </ul>
                                </li>
                                <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- /encabezado -->

            <div class="clear-header" id="inicio"></div>

