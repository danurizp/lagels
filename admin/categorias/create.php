<?php
// Para posicionar dentro de directorio general
$pos_dir = "../../";
require_once "{$pos_dir}includes/verificar_sesion.php";
require_once "{$pos_dir}includes/conexionbd.php";

$titulo_pagina = "Lagels | Tejido Artesanal";
$estilos_extra = "<link type='text/css' rel='stylesheet' href='{$pos_dir}css/indexAdminCss.php' />";
$pag_index = false;

include "{$pos_dir}html/header-admin-inicial.php";


// Se definen las variables y se inicializan con valores vacíos
$nombre = $titulo = $frase = "";
$nombre_err = $titulo_err = $frase_err = "";
 
// Si el mÃ©todo es POST, significa que el usuario ya enviÃ³ el formulario
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validar name
    $name = trim($_POST["name"]);
    if($name == ''){
        $name_err = "El nombre de la categoría es obligatorio.";
    } elseif(!filter_var($name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z'-.\s ]+$/")))){
        $name_err = 'Ingrese un nombre válido.';
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
        // Se prepara la instruccion INSERT
        $sql = 'INSERT INTO categorias (nombre, titulo, frase) VALUES ($1, $2, $3)';
        $stmt = pg_prepare($link, "insert_record", $sql);
        if($stmt) {
            
            // Se ejecuta la sentencia preparada
            // ** COMPLETA LA LLAMADA A PG_EXECUTE, ENVIANDO LOS VALORES DE CADA CAMPO
            $execute = pg_execute($link, "insert_record", [$name, $titulo, $frase]);
            
            if($execute){
                pg_close($link);
                header("Location: index.php");
                exit();
            } else {
                $name_err = "Algo salió mal. Intente nuevamente más tarde.";
            }
        }
    }    
}

?>

<section >
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="page-header">
                        <h2>Nuevo Registro</h2>
                    </div>
                    <p>Complete la información que se solicita a continuación para registrar una nueva categoría.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Nombre de la categoría</label>
                            <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($name); ?>">
                            <span class="help-block"><?php echo $name_err; ?></span>
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
