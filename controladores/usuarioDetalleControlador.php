<?php

    $id = $_GET["id"];

    require('../modelo/gestionDatos.php');

    $datos = new servicioDatos();
    $users = $datos->getUserById($id);

    $vista = "detalleUsuario.php";
    require '../vistas/layout.php';

?>