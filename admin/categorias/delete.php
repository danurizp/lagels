<?php
// Para posicionar dentro de directorio general
$pos_dir = "../../";
require_once "{$pos_dir}includes/verificar_sesion.php";
require_once "{$pos_dir}includes/conexionbd.php";

// Se definen las variables y se inicializan con valores vacíos
$nombre = "";
$nombre_err = "";

$titulo_pagina = "Lagels | Tejido Artesanal";
$estilos_extra = "<link type='text/css' rel='stylesheet' href='{$pos_dir}css/indexAdminCss.php' />";
$pag_index = false;

include "{$pos_dir}html/header-admin-inicial.php";

//Si el usuario ya envío el formulario confirmando la eliminación
if(isset($_POST["id"]) && !empty($_POST["id"])){
    
    include "{$pos_dir}includes/conexionbd.php";

    // Se prepara la instruccion DELETE
    // ** ESCRIBE LA INSTRUCCION SQL PARA BORRAR LA CIUDAD POR SU ID
    // ** LA INSTRUCCIÓN DEBE SER PARAMETRIZADA UTILIZANDO $1
    $sql = "DELETE FROM categorias WHERE id = $1";
    
    if(pg_prepare($link, 'delete_record', $sql)){

        // Se ejecuta la sentencia preparada
        // ** COMPLETA LA LLAMADA A PG_EXECUTE, SE DEBE ENVIAR EL PARAMETRO ID QUE LLEGA POR POST
        if(pg_execute($link, 'delete_record', array($_POST["id"]))){
            // El registro se eliminó. Redireccionamos al index
            header("Location: index.php");
            exit();
        } else{
            echo "Algo salió mal. Intente nuevamente más tarde.";
        }
    }

} elseif(empty(trim($_GET["id"]))){

    // La URL no contiene el parámetro Id
    // Redireccionamos a la página de error
    header("Location: error.php");
    exit();

}
?>
<section>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Eliminar Registro</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars(trim($_GET["id"])); ?>"/>
                        <p>¿Está seguro que desea eliminar este registro?</p><br>
                        <p>
                            <input type="submit" value="Sí" class="btn btn-danger">
                            <a href="index.php" class="btn btn-default">No</a>
                        </p>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</section>

<?php
//$js_extra = "<script src='{$pos_dir}js/index.js'></script>";
include "{$pos_dir}html/footer-admin.php";