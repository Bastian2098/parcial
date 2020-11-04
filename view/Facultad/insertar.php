<?php
 
if(isset($_POST["insertar"])){
    $facultad = new Facultad("", $_POST["nombre"], $_POST["direccion"], $_POST["telefono"]);
    $facultad -> crear();
}

?>

<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de Facultad </label>
    <input type="text" class="form-control" name="nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Direccion de Facultad </label>
    <input type="text" class="form-control" name="direccion">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefono de Facultad </label>
    <input type="text" class="form-control" name="telefono">
  </div>
  <button type="submit" class="btn btn-primary" name="insertar">Registrar</button>
</form>