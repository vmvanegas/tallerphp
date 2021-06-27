<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once '../modelo/gestionDatos.php';


if( (isset($_POST['usuario'])) && (!empty($_POST['usuario'])) &&
    (isset($_POST['password'])) && (!empty($_POST['password'])) )  {

        $usuario=$_POST['usuario'];
        $con=$_POST['password'];

        $datos = new servicioDatos();

        $logeado = $datos->validarUsuario($usuario,$con);
        if (isset($logeado)) {
            $_SESSION["idUser"] = $logeado["user_id"];
            $_SESSION["usuario"] = $logeado["email"];
            $_SESSION["nombre"] = $logeado["name"];
            $_SESSION["rol"] = $logeado["rol"];

            $ErrorCodigo = "USUARIO LOGEADO CORRECTAMENTE";
            $vista = "home.php";
            
        } else {
            $ErrorCodigo = "ERROR EN EL USUARIO O CONTRASEÑA";
            $vista = "formularioLogin.php";
        }
                
    } else {
        $ErrorCodigo = "Datos no validos";
        $vista = "formularioLogin.php";      
    }


    require "../vistas/layout.php";
