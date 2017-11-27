<?php
//Se inicializa la sesión
session_start();

// Si no está la variable en la sesión, significa que el usuario no está logueado
if(!isset($_SESSION['correo_electronico']) || empty($_SESSION['correo_electronico'])){
    header("location: " . $pos_dir . "admin");
    exit;
}