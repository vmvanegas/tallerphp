<?php foreach ($users as $user) { ?>

  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class='alert alert-danger my-5 d-flex justify-space-between align-items-center' role='alert'> ¿Desea eliminar los datos del siguiente estudiante?
        <form class="ml-auto" action="../controladores/usuarioBorrarControlador.php" method="POST">
          <input type="hidden" name="userId" value="<?php echo $user['user_id'] ?>">
          <button class="btn btn-danger" type="submit">Borrar datos</button>
        </form>
      </div>
      <div class="card">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead class="table-dark">
              <tr>
                <th scope="col" colspan="2"><?php echo $user["name"] ?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Correo: </td>
                <td><?php echo $user["email"] ?></td>
              </tr>
              <tr>
                <td>Nota 1: </td>
                <td><?php echo $user["grade_point_1"] ?></td>
              </tr>
              <tr>
                <td>Nota 2: </td>
                <td><?php echo $user["grade_point_2"] ?></td>
              </tr>
              <tr>
                <td>Nota 3: </td>
                <td><?php echo $user["grade_point_3"] ?></td>
              </tr>
              <tr>
                <td>Promedio: </td>
                <td><?php echo $user["grade_point_average"] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php } ?>