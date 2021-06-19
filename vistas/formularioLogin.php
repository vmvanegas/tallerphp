
<div class="row">
  <div class="col-md-6 offset-md-3">
  <p class="h3 my-5">Inicio de sesion</p>
    <form action="../controladores/usuarioLoginControlador.php" method="post">
      <?php
      if (isset($ErrorCodigo)) {
        echo "<div class='alert alert-danger' role='alert'> $ErrorCodigo </div>";
      }
      ?>
      <div class="form-group">
        <label class="form-label">Correo</label>
        <input type="text" class="form-control" name="usuario" placeholder="ej: cordinador@gmail.com" required>
      </div>
      <div class="form-group">
        <label class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="password" placeholder="************" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Iniciar sesion</button>
      </div>
    </form>
  </div>
</div>