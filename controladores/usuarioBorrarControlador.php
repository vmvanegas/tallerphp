<?php

require '../modelo/gestionDatos.php';

$userId=$_POST['userId'];
$datos = new servicioDatos();
$deleteUser = $datos->deleteUser($userId);
$listar = new servicioDatos();
$users = $listar->getUsers();
$vista = "listarUsuarios.php";
require "../vistas/layout.php";
