<?php
require "enrutamiento.php";
$enrutar = new enrutamiento();


if(isset($_GET['rutaOpc']))
    $vista = $enrutar ->Ruta($_GET['rutaOpc']);

require "../vistas/layout.php"

?>