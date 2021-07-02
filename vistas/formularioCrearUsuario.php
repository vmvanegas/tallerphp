<div class="row">
  <div class="col-md-6 offset-md-3">
    <p class="h3 my-5">Crear estudiante</p>
    <form action="../controladores/usuarioCrearControlador.php" method="post">

      <!-- Valores que no cambian -->
      <input type="hidden" name="rol" value="estudiante">
      <!--  -->

      <div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control" name="name" placeholder="ej: Jhon Doe" required>
      </div>
      <div class="form-group">
        <label>Correo</label>
        <input type="email" class="form-control" name="email" placeholder="ej: jhon@gmail.com" required>
      </div>
      <div class="form-group">
        <label>Contraseña</label>
        <input type="password" class="form-control" name="password" placeholder="************" required>
      </div>
      <div class="form-group">
        <label>Nota 1</label>
        <input type="number" class="form-control" max="10" name="gradePoint1" placeholder="ej: 5" required>
      </div>
      <div class="form-group">
        <label>Nota 2</label>
        <input type="number" class="form-control" max="10" name="gradePoint2" placeholder="ej: 10" required>
      </div>
      <div class="form-group">
        <label>Nota 3</label>
        <input type="number" class="form-control" max="10" name="gradePoint3" placeholder="ej: 2" required>
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>
</div>