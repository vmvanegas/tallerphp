<?php

require '../modelo/gestionDatos.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$datos = new servicioDatos();

if(isset($_SESSION["rol"]) && $_SESSION["rol"] == "estudiante"){
    $users = $datos->getUserById($_SESSION["idUser"]);
} else {
    $users = $datos->getUsers();
}


$vista = "listarUsuarios.php";
require "../vistas/layout.php"

?>