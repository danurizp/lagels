<?php
session_start();

// Si esta el valor significa que el usuario está logueado
//if(!(!isset($_SESSION['correo_electronico']) || empty($_SESSION['correo_electronico']))){
//    header("location: inicial/");
//    exit;
//}

// Para posicionar dentro de directorio general
$pos_dir = "../";
require_once "{$pos_dir}includes/conexionbd.php";

$titulo_pagina = "Lagels | Tejido Artesanal";
$estilos_extra = "<link type='text/css' rel='stylesheet' href='{$pos_dir}css/indexAdminCss.php' />";
$pag_index = false;

include "{$pos_dir}html/header-admin-index.php";

//$pass_admin = password_hash("admin", PASSWORD_DEFAULT);
//print_r($pass_admin);

//Se definen variables y se inicializan como vacías
$correo_electronico = $contrasenia = "";
$correo_electronico_err = $contrasenia_err = $login_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Se valida que el correo no venga vacio
    if(empty(trim($_POST["usuario"]))){
        $correo_electronico_err = 'Ingresa la cuenta de usuario.';
    } else{
        $correo_electronico = trim($_POST["usuario"]);
    }
    
    // Se valida que la contraseña no venga vacía
    if(empty(trim($_POST['password']))){
        $contrasenia_err = 'Ingresa la contraseña.';
    } else{
        $contrasenia = trim($_POST['password']);
    }
    
    // Si vienen ambos datos, entonces verificamos que sea un usuario válido
    if(empty($correo_electronico_err) && empty($contrasenia_err)) {
        
        $sql = "SELECT * FROM usuarios WHERE correo_electronico = $1";
        
        $stmt = pg_prepare($link, "select_record", $sql);
        
        if ($stmt) {
            // Se ejecuta la consulta
            $result = pg_execute($link, "select_record", [$correo_electronico]);
            if ($result) {
                
                //Si se encontró el registro:
                if (pg_num_rows($result) == 1) {
                    /* Se obtiene el registro como un arreglo asociativo.
                    Como el resultado solo contiene una fila no necesitamos un ciclo while */
                    $usuario = pg_fetch_array($result, 0, PGSQL_ASSOC);
                    $contrasenia_cifrada = $usuario['password'];

                    //Verificamos si las contraseñas coinciden
                    if (password_verify($contrasenia, $contrasenia_cifrada)) {
                        /* Si coincide la contraseña, iniciamos la sesión y subimos los datos del usuario a la sesión */
                        $_SESSION['correo_electronico'] = $correo_electronico;
                        $_SESSION['nombre_completo'] = trim($usuario['nombre'] . ' ' . $usuario['primer_apellido'] . ' ' . $usuario['segundo_apellido']);
                        header("location: inicial/");
                    } else {
                        // La contraseña no coincidió. Le mandamos un mensaje genérico al usuario
                        //Por seguridad NO se le debe notificar que lo que falló fue la contraseña
                        $login_err = 'La cuenta o la contraseña no son válidas';
                    }
                } else {
                    //No hay cuentas con ese correo electrónico
                    //Por seguridad NO se le debe notificar que lo que falló fue que no hay usuarios con ese correo
                    $login_err = 'La cuenta o la contraseña no son válidas';
                }
            } else {
                //La consulta no se pudo realizar
                header("Location: error.php");
                exit();

            }
        }
    }
    // Close connection
    pg_close($link);
}
?>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" >
                <form class="form-signin "  action="./index.php" method="post" name="post" id="post">

                    <h2 class="form-signin-heading">ACCESO</h2>

                    <div class="form-group <?php echo (!empty($correo_electronico_err)) ? 'has-error' : ''; ?>">
                        <i class="fa fa-user"></i>
                        <input class="form-control" placeholder="Usuario" name="usuario" type="text" size="30" maxlength="255" value="<?php echo $correo_electronico; ?>"/>
                        <span class="help-block"><?php echo $correo_electronico_err; ?></span>
                    </div>
                    <div class="form-group log-status <?php echo (!empty($contrasenia_err)) ? 'has-error' : ''; ?>">
                        <i class="fa fa-lock"></i>
                        <input class="form-control" placeholder="Contraseña" name="password" type="password" size="30" maxlength="40" value="<?php echo $contrasenia; ?>"/>
                        <span class="help-block"><?php echo $contrasenia_err; ?></span>
                    </div>

                    <input class="log-btn" name="send" value="Conectar" type="submit" />
                    
                    <span class="text-danger"><?php echo $login_err; ?></span>

                </form>
            </div>
        </div>
    </div> <!-- /container -->
</section>

<?php
$js_extra = '';
include "{$pos_dir}html/footer-admin.php";
