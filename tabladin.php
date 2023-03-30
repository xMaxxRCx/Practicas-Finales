<?php 
include "include/conexion.php";
include "include/query.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Tabla Dinamica</title>
</head>
<body>
<table class="table">
  <thead>
  <tr>
     <th scope="col">Id_User</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Email</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Id_Tuser</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $Ejecuta->fetch_array()){

     ?>
    <tr>
      <td><?php echo $row['Nombre'];?></td>
    </tr>
    <?php }?>
    </tbody>
</table>
</body>
</html>