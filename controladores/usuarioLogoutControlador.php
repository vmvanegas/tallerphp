<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (session_status() != PHP_SESSION_NONE) {
    session_destroy();
}

$vista = "formularioLogin.php";
require "../vistas/layout.php";
?>