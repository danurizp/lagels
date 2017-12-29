<?php
/* Datos de conexión a la base de datos */
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'postgres');
define('DB_PASSWORD', 'admin');
define('DB_NAME', 'lagels');
define('DB_PORT', '5432');

/* Se realiza la conexión a la base de datos */
$link = pg_connect('host=' . DB_SERVER . ' port=' . DB_PORT . ' dbname=' . DB_NAME . ' user=' . DB_USERNAME . ' password=' . DB_PASSWORD);
 
// Se verifica que la conexión se haya logrado
if($link === false){
    header ('Location: error.php');
    //die("ERROR: Could not connect. " . pg_last_error());
}
?>
