<div class="row">
  <div class="col-md-6 offset-md-3">
    <p class="h3 my-5">
      Editar datos estudiante
    </p>
    <form action="../controladores/usuarioEditarControlador.php" method="post">

      <!-- Valores que no cambian -->
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <input type="hidden" name="userId" value="<?php echo $userId ?>">
      <!--  -->

      <?php if (isset($_SESSION["rol"]) && $_SESSION["rol"] == "cordinador") { ?>
        <div class="form-group">
          <label class="form-label">Nombre</label>
          <input type="text" class="form-control" name="name" placeholder="ej: Jhon Doe" value="<?php echo $name ?>" required>
        </div>
        <div class="form-group">
          <label class="form-label">Correo</label>
          <input type="email" class="form-control" name="email" placeholder="ej: jhon@gmail.com" value="<?php echo $email ?>" required>
        </div>
        <div class="form-group">
          <label class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="password" placeholder="************" value="<?php echo $password ?>" required>
        </div>
      <?php } ?>
      <div class="form-group">
        <label class="form-label">Nota 1</label>
        <input type="number" class="form-control" max="10" name="gradePoint1" placeholder="ej: 5" value="<?php echo $gradePoint1 ?>" required>
      </div>
      <div class="form-group">
        <label class="form-label">Nota 2</label>
        <input type="number" class="form-control" max="10" name="gradePoint2" placeholder="ej: 10" value="<?php echo $gradePoint2 ?>" required>
      </div>
      <div class="form-group">
        <label class="form-label">Nota 3</label>
        <input type="number" class="form-control" max="10" name="gradePoint3" placeholder="ej: 2" value="<?php echo $gradePoint3 ?>" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
  </div>
</div>