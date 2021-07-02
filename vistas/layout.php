<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/ac5e861b74.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/misEstilos.css">
  <title>Taller PHP</title>
</head>

<body>

  <header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="../controladores/rutasControlador.php?rutaOpc=0">
          <img src="../assets/pic/php-logo.png" width="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../controladores/rutasControlador.php?rutaOpc=0">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../controladores/rutasControlador.php?rutaOpc=1">Nosotros</a>
            </li>
            <?php if (isset($_SESSION["rol"])) { ?>
              <li class="nav-item">
                <a class="nav-link" href="../controladores/usuariosListarControlador.php">Notas de estudiantes</a>
              </li>
            <?php } ?>
          </ul>
          <ul class="navbar-nav ml-auto">
            <?php
            if (!isset($_SESSION["rol"])) { ?>
              <li class="nav-item">
                <a class="nav-link" href="../controladores/rutasControlador.php?rutaOpc=4">Login</a>
              </li>
            <?php } else { ?>
              <li class="nav-item">
                <a class="nav-link" href="../controladores/usuarioLogoutControlador.php">Logout</a>
              </li>
            <?php  } ?>
          </ul>
        </div>

      </div>
    </nav>

  </header>

  <main class="container">
    <?php

    if (!isset($vista))
      $vista = "home.php";

    require $vista;

    ?>
  </main>

  <footer class="bg-dark d-flex justify-content-center align-items-center py-3 mt-5">

    <div class="container">
      <div class="row">
        <div class="col-md-3 d-flex justify-content-lg-center align-items-center">

          <div class="m-2"> <img class="ico" src="../assets/pic/github_w.png" alt=""></div>
          <div class="d-flex flex-column align-items-center">
            <p class="text-white m-0 p-0"> Victor Vanegas </p>
            <!--         <p class="text-white m-0 p-0 ">vmvanegas</p>
 -->
          </div>
        </div>
        <div class="col-md-3 d-flex justify-content-lg-center align-items-center">

          <div class="m-2"> <img class="ico" src="../assets/pic/github_w.png" alt=""></div>
          <div class="d-flex flex-column align-items-center">
            <p class="text-white m-0 p-0"> Jair Rivera </p>
            <!--         <p class="text-white m-0 p-0 ">vmvanegas</p>
 -->
          </div>
        </div>
        <div class="col-md-3 d-flex justify-content-lg-center align-items-center">

          <div class="m-2"> <img class="ico" src="../assets/pic/github_w.png" alt=""></div>
          <div class="d-flex flex-column align-items-center">
            <p class="text-white m-0 p-0"> Steven Sanchez </p>
            <!--         <p class="text-white m-0 p-0 ">vmvanegas</p>
 -->
          </div>
        </div>
        <div class="col-md-3 d-flex justify-content-lg-center align-items-center">

          <div class="m-2"> <img class="ico" src="../assets/pic/github_w.png" alt=""></div>
          <div class="d-flex flex-column align-items-center">
            <p class="text-white m-0 p-0"> Natalia Lagos </p>
            <!--         <p class="text-white m-0 p-0 ">vmvanegas</p>
 -->
          </div>
        </div>
      </div>
    </div>

  </footer>

</body>

</html>