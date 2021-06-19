<?php

    $id = $_GET["id"];

    require('../modelo/gestionDatos.php');

    $datos = new servicioDatos();
    $users = $datos->getUserById($id);

    $vista = "borrarUsuario.php";
    require '../vistas/layout.php';

?>