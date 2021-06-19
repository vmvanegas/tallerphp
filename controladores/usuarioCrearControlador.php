<?php

require_once '../modelo/gestionDatos.php';


$user = new stdClass();

$user->name = $_POST['name'];
$user->email = $_POST['email'];
$user->password = $_POST['password'];
$user->rol = $_POST['rol'];
$user->gradePoint1 = $_POST['gradePoint1'];
$user->gradePoint2 = $_POST['gradePoint2'];
$user->gradePoint3 = $_POST['gradePoint3'];

$datos = new servicioDatos();

$insertarUsuario = $datos->createUser($user);

if ($insertarUsuario) {
    $datos = new servicioDatos();
    $users = $datos->getUsers();
    $vista = "listarUsuarios.php";
} else {
    $vista = "formularioCrearUsuario.php";
}


$vista = "listarUsuarios.php";
require "../vistas/layout.php";
