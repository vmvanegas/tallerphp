<?php

    $id = $_GET["id"];

    require('../modelo/gestionDatos.php');

    $datos = new servicioDatos();
    $users = $datos->getUserById($id);

    foreach($users as $user) {
        $userId = $user['user_id'];
        $name = $user['name'];
        $email = $user['email'];
        $password = $user['password'];
        $rol = $user['rol'];
        $id = $user['id'];
        $gradePoint1 = $user['grade_point_1'];
        $gradePoint2 = $user['grade_point_2'];
        $gradePoint3 = $user['grade_point_3'];
    }
    $servicioDatos = new servicioDatos();

    $vista = "formularioEditarUsuario.php";
    require '../vistas/layout.php';

?>