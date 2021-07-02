<div class="row py-5">
  <div class="col-md-6">
    <h1 class="h3">Notas de estudiantes</h1>
  </div>
  <div class="col-md-6">
    <div class="d-flex w-100 justify-content-md-end">
      <?php if (isset($_SESSION["rol"]) && $_SESSION["rol"] == "cordinador") { ?>
        <a class="btn btn-primary" href="../controladores/rutasControlador.php?rutaOpc=3">Agregar estudiante</a>
      <?php } ?>
    </div>
  </div>
</div>
<div class="card">
  <div class="table-md-responsive">
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
            <td><?php echo number_format($user["grade_point_average"], 2, '.', ""); ?></td>


            <!-- <?php if (isset($_SESSION["rol"]) && ($_SESSION["rol"] != "estudiante")) { ?>
              <td>
                <div class="dropdown">
                  <button class="btn btn-transparent" type="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></button>
                  <ul class="dropdown-menu">
                    <li><a class="link-icon" href="../controladores/usuarioDetalleControlador.php?id=<?php echo $user["user_id"] ?>"><i class="fas fa-info"></i> Ver detalle</a></li>
                    <?php if (isset($_SESSION["rol"]) && ($_SESSION["rol"] == "cordinador" || $_SESSION["rol"] == "profesor")) { ?>
                      <li><a class="link-icon" href="../controladores/usuariosDatosEditarControlador.php?id=<?php echo $user["user_id"] ?>"><i class="far fa-edit"></i> Editar</a></li>
                    <?php } ?>
                    <?php if (isset($_SESSION["rol"]) && $_SESSION["rol"] == "cordinador") { ?>
                      <li><a class="link-icon red" href="../controladores/usuarioDetalleBorrarControlador.php?id=<?php echo $user["user_id"] ?>"><i class="far fa-trash-alt"></i> Borrar</a></li>
                    <?php } ?>                   
                  </ul>
                </div>
              </td>
            <?php } ?> -->
          
            <td align="center" width="50"><a class="link-icon" title="ver detalle" href="../controladores/usuarioDetalleControlador.php?id=<?php echo $user["user_id"] ?>"><i class="fas fa-info"></i></a></td>
            <?php if (isset($_SESSION["rol"]) && ($_SESSION["rol"] == "cordinador" || $_SESSION["rol"] == "profesor")) { ?>
              <td align="center" width="50"><a class="link-icon" title="editar" href="../controladores/usuariosDatosEditarControlador.php?id=<?php echo $user["user_id"] ?>"><i class="far fa-edit"></i></a></td>
            <?php } ?>
            <?php if (isset($_SESSION["rol"]) && $_SESSION["rol"] == "cordinador") { ?>
              <td align="center" width="50"><a class="link-icon red" title="borrar" href="../controladores/usuarioDetalleBorrarControlador.php?id=<?php echo $user["user_id"] ?>"><i class="far fa-trash-alt"></i></a></td>
            <?php } ?>
          </tr>
        <?php
        }
        ?>

      </tbody>
    </table>
  </div>
</div>