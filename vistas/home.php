<h1 class="h3 my-5"> Bienvenido <?php if (isset($_SESSION["name"])) {
                                    echo $_SESSION["name"];
                                } ?></h1>

<div class="card">
    <div class="row">
        <div class="col-md-4 py-3">
            <img class="img-fluid" src="../assets/pic/imgDeveloper1.jpg" alt="">
        </div>

        <div class="col-md-8">
            <div class="p-3">
                <p>Aplicacion desarrollada en php con funcion de roles autenticacion y crud</p>
                <p>Sistema con un crud básico este sistema cuenta con diversos permisos dependiendo del usuario que se
                    encuentre logueado dentro del sistema</p>
            </div>
        </div>
    </div>
</div>