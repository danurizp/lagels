<?php
// Para posicionar dentro de directorio general
$pos_dir = "../../";
require_once "{$pos_dir}includes/verificar_sesion.php";
require_once "{$pos_dir}includes/conexionbd.php";

// Se definen las variables y se inicializan con valores vacíos
$nombre = $titulo = $frase = "";
$nombre_err = $titulo_err = $frase_err = "";

$titulo_pagina = "Lagels | Tejido Artesanal";
$estilos_extra = "<link type='text/css' rel='stylesheet' href='{$pos_dir}css/indexAdminCss.php' />";
$pag_index = false;

include "{$pos_dir}html/header-admin-inicial.php";

// Si viene el id vía POST, significa que el usuario ya hizo las modificaciones y envió el formulario
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];

    // Validar nombre
    $nombre = trim($_POST["nombre"]);
    if($nombre == ''){
        $nombre_err = "El nombre es obligatorio.";
    } elseif(!filter_var($nombre, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-ZáéíóúÁÉÍÓÚÑñ'-.\s ]+$/")))){
        $nombre_err = 'Ingrese un nombre válido.';
    }
    
    // Validar titulo
    $titulo = trim($_POST["titulo"]);
    if($titulo == ''){
        $titulo_err = "El título es obligatorio.";
    } elseif(!filter_var($titulo, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-ZáéíóúÁÉÍÓÚÑñ'-.\s ]+$/")))){
        $titulo_err = 'Ingrese un título válido.';
    }
    
    // Validar frase
    $frase = trim($_POST["frase"]);
    if($frase == ''){
        $frase_err = "La frase es obligatoria.";
    } elseif(!filter_var($frase, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-ZáéíóúÁÉÍÓÚÑñ'-.\s ]+$/")))){
        $frase_err = 'Ingrese una frase válida.';
    }

    // Verificar que no hubieron errores en las validaciones antes de insertar a la base de datos
    if(empty($nombre_err) && empty($titulo_err) && empty($frase_err)) {
        // Se prepara la instruccion UPDATE
        $sql = "UPDATE categorias SET nombre=$1, titulo=$2, frase=$3 WHERE id=$4";
        $parametros = [$nombre, $titulo, $frase, $id];
         
        if($stmt = pg_prepare($link, "update_record", $sql)){
            // Se ejecuta la sentencia preparada
            if(pg_execute($link, "update_record", $parametros)){
                // El registro se actualizó correctamente.
                // Redireccionamos a la página principal
                header("location: index.php");
                exit();
            } else{
                echo "Algo salió mal. Intente nuevamente más tarde.";
            }
        }
    }
} elseif (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        // Se obtiene el parametro de GET
        $id =  trim($_GET["id"]);

    // Se prepara la instruccion SELECT
        $sql = "SELECT * FROM categorias WHERE id = $1";
        if($stmt = pg_prepare($link, "select_record", $sql)){

            // Se ejecuta la sentencia preparada
            if($result = pg_execute($link, "select_record", [$id])){

                //Si se encontró el registro:
                if(pg_num_rows($result) == 1){
                    /* Se obtiene el registro como un arreglo asociativo.
                    Como el resultado solo contiene una fila no necesitamos un ciclo while */
                    $row = pg_fetch_array($result, 0,PGSQL_ASSOC);
                    
                    // Se asignan lovalores de cada campo
                    $nombre = $row["nombre"];
                    $titulo = $row["titulo"];
                    $frase = $row["frase"];
                } else{
                    //No se encontró el registro con el id que viene como parámetro
                    //Redireccionamos a la página de error
                    header("location: error.php");
                    exit();
                }
                
            } else{
                //La consulta no se pudo realizar
                header("Location: error.php");
                exit();
            }
        }
}  else {
    //La Url no contiene el parametro ID
    header("location: error.php");
    exit();
}

?>
 
<section>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="page-header">
                        <h2>Actualizar Registro</h2>
                    </div>
                    <p>Edite la información de los campos y envíe el formulario para actualizar el registro.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($nombre_err)) ? 'has-error' : ''; ?>">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="<?php echo htmlspecialchars($nombre); ?>">
                            <span class="help-block"><?php echo $nombre_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($titulo_err)) ? 'has-error' : ''; ?>">
                            <label>Título</label>
                            <input type="text" name="titulo" class="form-control" value="<?php echo htmlspecialchars($titulo); ?>">
                            <span class="help-block"><?php echo $titulo_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($frase_err)) ? 'has-error' : ''; ?>">
                            <label>Frase</label>
                            <textarea class="form-control" rows="2" name="frase" ><?php echo htmlspecialchars($frase); ?></textarea>
                            <span class="help-block"><?php echo $frase_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Aceptar">
                        <a href="index.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</section>

<?php
//$js_extra = "<script src='{$pos_dir}js/index.js'></script>";
include "{$pos_dir}html/footer-admin.php";