<?php
include_once("assets/php/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h2>Lista de Usuarios:</h2>
<div class="container-fluid">
      <div class="row">
    <div class="col-7">
<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $q = "SELECT * FROM usuario";
    $rsq = mysqli_query($conn, $q) or die("Error: " . mysqli_error($conn));
    while($fila = mysqli_fetch_array($rsq)){
        ?>
        <tr>
             
             <th <?php echo $fila ["idUsuario"];?></th>
             <td><?php echo $fila ["nombre"]?></td>
             <td><?php echo $fila ["apellido"]?></td>
             <td><?php echo $fila ["correo"]?></td>
        </tr>
        <?php
    }
    ?>
    
    </tr>
  </tbody>
</table>
    </div>
    <div class="col-5">
      <form action=""method="post">
    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">XD</span>
  <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">XD</span>
  <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">XD</span>
  <input type="text" class="form-control" placeholder="Correo" aria-label="Correo" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">XD</span>
  <input type="password" class="form-control" placeholder="Clave" aria-label="Clave" aria-describedby="basic-addon1">
</div>
<button type="submit" class="btn btn-outline-primary">Guardar</button>
    </form>
    </div>
  </div>
  
</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>