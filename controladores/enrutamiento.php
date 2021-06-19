<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class enrutamiento
{

    public function Ruta($i)
    {

        switch ($i) {
            case 0:
                $v = "home.php";
                break;
            case 2:
                $v = "productos.php";
                break;
            case 3:
                $v = "formularioCrearUsuario.php";
                break;
            case 4:
                $v = "formularioLogin.php";
                break;
            default:
                $v = "home.php";
                break;
        }

        return $v;
    }

}
