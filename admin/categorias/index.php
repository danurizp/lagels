<?php
// Para posicionar dentro de directorio general
$pos_dir = "../../";
require_once "{$pos_dir}includes/verificar_sesion.php";
require_once "{$pos_dir}includes/conexionbd.php";

$titulo_pagina = "Lagels | Tejido Artesanal";
$estilos_extra = "<link type='text/css' rel='stylesheet' href='{$pos_dir}css/indexAdminCss.php' />";
$pag_index = false;

include "{$pos_dir}html/header-admin-inicial.php";

?>

<section >
    <div class="wrapper">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Administración de Categorías</h2>
                        <a href="create.php" class="btn btn-success pull-right">Agrega nueva Categoría</a>
                    </div>
                    <?php
                    
                    // Se ejecuta la consulta a la base de datos
                    // Cuando en el query no se usan parametros, se utiliza pg_query()
                    // ** ESCRIBE EL COMANDO SQL PARA SELECCIONAR TODAS LAS CIUDADES **
                    $sql = 'SELECT * FROM categorias ORDER BY id';
                    if($result = pg_query($link, $sql)){
                        if(pg_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo '<thead>';
                                    echo '<tr>';
                                        echo '<th>#</th>';
                                        echo '<th>Nombre</th>';
                                        echo '<th>Título</th>';
                                        echo '<th>Frase</th>';
                                    echo '</tr>';
                                echo '</thead>';
                                echo '<tbody>';
                                //Con pg_fetch_array obtenemos un registro a la vez,
                                //Gracias al while recorremos todos los registros
                                while($row = pg_fetch_array($result)){
                                    echo '<tr>';
                                        echo '<td>' . $row['id'] . '</td>';
                                        echo '<td>' . $row['nombre'] . '</td>';
                                        echo '<td>' . $row['titulo'] . '</td>';
                                        echo '<td>' . $row['frase'] . '</td>';
                                        echo '<td class="text-nowrap text-center">';
                                            echo '<a class="btn btn-info" href="update.php?id='. $row['id'] .'" title="Actualizar Registro" data-toggle="tooltip">Actualizar</a>';
                                            echo '<a class="btn btn-danger" href="delete.php?id='. $row['id'] .'" title="Eliminar Registro" data-toggle="tooltip">Eliminar</a>';
                                        echo '</td>';
                                    echo '</tr>';
                                }
                                echo '</tbody>';
                            echo '</table>';
                        } else{
                            echo '<p class="lead"><em>No se encontraron registros.</em></p>';
                        }
                    } else{
                        echo '<p class="lead"><em>Ocurrió un error.</em></p>';
                    }
 
                    // Se cierra la conexón
                    pg_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</section>



<?php
//$js_extra = "<script src='{$pos_dir}js/index.js'></script>";
include "{$pos_dir}html/footer-admin.php";
