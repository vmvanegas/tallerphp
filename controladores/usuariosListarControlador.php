<?php

require '../modelo/gestionDatos.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$datos = new servicioDatos();

$users = $datos->getUsers();


$vista = "listarUsuarios.php";
require "../vistas/layout.php"

?>