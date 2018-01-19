<?php
$titulo_pagina = 'Lagels | Tejido Artesanal';
$estilos_extra = '<link type="text/css" rel="stylesheet" href="css/indexCss.php" />';
$pag_index = true;
$ubicacion = true;
$pos_dir = "";

include 'datos/indexDatos.php';

include 'html/header.php';

?>

<section >
    <div class="titulo-principal">
        <h1>Bienvenid@</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="texto-contenido col-md-6 no-padding">
                <div class="img-principal" ><img src="<?php echo $imagen_principal['src']; ?>"></div>
            </div>
        </div>
    </div>
    
</section>

<section id="mision">
    <div  class="contenido-1">
        <h1>Lagels Tejido Artesanal le ofrece productos</h1>
        <div class=" wow flash" data-wow-duration="2s" data-wow-offset="10"  data-wow-iteration="2"><h2><em>100% hechos a mano</em></h2></div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="texto-contenido col-md-6">
                <p>
                    Cuando veas algún producto artesanal, hecho a mano, piensa que detrás de él hay personas que han puesto todas sus ganas e ilusión en hacerlo para ti, y además es algo original, hecho con mucho cariño y cuidado.
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/hands-1032312_640.jpg" alt="Manos" />
            </div>
        </div>
    </div>
    <!-- /contenido-1 -->
</section>

<section>
    <div id="vision"  class="contenido-2">
        
        <div class="container-fluid no-padding">
            <div class="row">
                <div class="col-md-6 no-padding">
                    <div class="ordinario" >
                        <h1>En Lagels transformamos lo ordinario.</h1>
                        <img src="img/estambres.jpg">
                    </div>
                </div>
                <div class="col-md-6 no-padding">
                    <div class="extraordinario" >
                        <h1>En algo extraordinario.</h1>
                        <img src="img/productos.jpg">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- /Extraordinario -->
    </div>
</section>

<?php
if (count($destacados) > 0) {
    ?>
    <section>
        <div id="catalogo" class="catalogo">
            <h1>Destacados</h1>

            <?php
            $secciones_destacados = 0;
            foreach ($destacados as $key_categoria => $value_categoria) {
                $secciones_destacados++;
                $par = false;
                if ($secciones_destacados % 2 == 0) {
                    $par = true;
                }
                ?>
                <div id="<?php echo $key_categoria; ?>">
                    <div class="container">
                        <div class="row">
                            <?php
                            if ($par) {
                                ?>
                                <div class="col-md-4 vertical-center">
                                    <div class="<?php echo $key_categoria; ?>">
                                        <h2><?php echo $value_categoria['titulo']; ?></h2>
                                        <p><?php echo $value_categoria['frase']; ?></p>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="col-md-8">
                                <div  class="carousel owl-carousel owl-theme ">
                                    <?php
                                    foreach ($value_categoria['destacado'] as $key_destacado => $value_destacado) {
                                        ?>
                                        <div class="item img-previo" >
                                            <h2><?php echo $value_destacado['titulo']; ?></h2>
                                            <a href="<?php echo $value_destacado['imagen']; ?>" title="<?php echo $value_destacado['titulo']; ?>">
                                                <img src="<?php echo $value_destacado['imagen']; ?>" alt="<?php echo $value_destacado['alt']; ?>" />
                                            </a>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php
                            if (!$par) {
                                ?>
                                <div class="col-md-4 vertical-center">
                                    <div class="<?php echo $key_categoria; ?>">
                                        <h2><?php echo $value_categoria['titulo']; ?></h2>
                                        <p><?php echo $value_categoria['frase']; ?></p>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
    </section>
    <?php
}
?>

<?php
if ($ubicacion) {
    ?>
    <section>
        <div id="ubicacion" class="ubicacion">
            <h1>Ubicación</h1>
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-4">

                        <div class="dirTienda">
                            <h3>Dirección de la Tienda</h3>
                            <p>Calle Número, Colonia, Delegación o Municipio, CP Ciudad o Estado</p>
                        </div>

                    </div>
                    <div class="col-md-8">

                        <div id="map"></div>
                    </div>
                </div>
            </div><!--direcciones-->
        </div>
    </section>
    <?php
}
?>

<?php
$js_extra = '<script src="js/index.js"></script>';
include 'html/footer.php';
