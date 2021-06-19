<div class="row py-5">
  <div class="col-md-6">
    <h1 class="h3">Notas de estudiantes</h1>
  </div>
  <div class="col-md-6">
    <div class="d-flex w-100 justify-content-end">
      <?php if (isset($_SESSION["rol"]) && $_SESSION["rol"] == "cordinador") { ?>
        <a class="btn btn-primary" href="../controladores/rutasControlador.php?rutaOpc=3">Agregar estudiante</a>
      <?php } ?>
    </div>
  </div>
</div>
<div class="card">
  <div class="table-responsive">
    <table class="table table-striped">
      <thead class="table-dark">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Nota 1</th>
          <th scope="col">Nota 2</th>
          <th scope="col">Nota 3</th>
          <th scope="col">Promedio</th>
          <th colspan="3">Acciones</th>
        </tr>
      </thead>
      <tbody>


        <?php
        foreach ($users as $user) {
        ?>
          <tr>
            <td><?php echo $user["name"] ?></td>
            <td><?php echo $user["grade_point_1"] ?></td>
            <td><?php echo $user["grade_point_2"] ?></td>
            <td><?php echo $user["grade_point_3"] ?></td>
            <td><?php echo $user["grade_point_average"] ?></td>
            <td><a href="../controladores/usuarioDetalleControlador.php?id=<?php echo $user["user_id"] ?>">Detalle</a></td>
            <?php if (isset($_SESSION["rol"]) && ($_SESSION["rol"] == "cordinador" || $_SESSION["rol"] == "profesor")) { ?>
              <td><a href="../controladores/usuariosDatosEditarControlador.php?id=<?php echo $user["user_id"] ?>">Editar</a></td>
            <?php } ?>
            <?php if (isset($_SESSION["rol"]) && $_SESSION["rol"] == "cordinador") { ?>
              <td><a class="red" href="../controladores/usuarioDetalleBorrarControlador.php?id=<?php echo $user["user_id"] ?>">Borrar</a></td>
            <?php } ?>
          </tr>
        <?php
        }
        ?>

      </tbody>
    </table>
  </div>
</div>