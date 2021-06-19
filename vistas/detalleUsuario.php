<div class="row">
  <div class="col-md-6 offset-md-3">
    <p class="h3 my-5">Detalle de estudiante</p>
    <div class="card">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead class="table-dark">
            <tr>
              <?php foreach ($users as $user) { ?>
                <th scope="col" colspan="2"><?php echo $user["name"] ?></th>
              <?php } ?>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($users as $user) {
            ?>
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
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>