<?php
// Para posicionar dentro de directorio general
$pos_dir = "../../";
require_once "{$pos_dir}includes/verificar_sesion.php";
require_once "{$pos_dir}includes/conexionbd.php";

$titulo_pagina = "Lagels | Tejido Artesanal";
$estilos_extra = "<link type='text/css' rel='stylesheet' href='{$pos_dir}css/indexCss.php' />";
$pag_index = false;

include "{$pos_dir}html/header-admin-inicial.php";

?>

<section >
    <div class="titulo-principal">
        <h1>Bienvenid@</h1>
    </div>
    <div class="img-principal" ></div>
</section>



<?php
//$js_extra = "<script src='{$pos_dir}js/index.js'></script>";
include "{$pos_dir}html/footer.php";
