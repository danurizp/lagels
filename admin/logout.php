<?php
// Se inicializa la sesión
session_start();
 
// Se borran todas las variables de la sesión
$_SESSION = array();

// Se destruye la sesión
session_unset();
session_destroy();
 
// Redirigimos al usuario a la página de login
header("location: index.php");
exit;
?>