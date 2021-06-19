<?php

require '../modelo/gestionDatos.php';

if (isset($_SESSION["rol"]) && $_SESSION["rol"] == "cordinador") {
    $user = new stdClass();

    $user->userId = $_POST['userId'];
    $user->name = $_POST['name'];
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];
    $user->id = $_POST['id'];
    $user->gradePoint1 = $_POST['gradePoint1'];
    $user->gradePoint2 = $_POST['gradePoint2'];
    $user->gradePoint3 = $_POST['gradePoint3'];
    
    $datos = new servicioDatos();
    
    $actualizar = $datos->updateUser($user);
} else {
    $user = new stdClass();

    $user->id = $_POST['id'];
    $user->gradePoint1 = $_POST['gradePoint1'];
    $user->gradePoint2 = $_POST['gradePoint2'];
    $user->gradePoint3 = $_POST['gradePoint3'];
    
    $datos = new servicioDatos();
    
    $actualizar = $datos->updateUserGradePoints($user);
}



if ($actualizar) {
    $datos = new servicioDatos();
    $users = $datos->getUsers();
    $vista = "listarUsuarios.php";
} else {
    $vista = "formularioEditarUsuario.php";
}

require "../vistas/layout.php";
