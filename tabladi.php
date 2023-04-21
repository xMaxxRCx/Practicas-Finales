<?php 
include "include/conexion.php";

$consulta="SELECT * FROM usuarios ORDER BY Nombre ASC";
$execute=$conex->query($consulta);

$consulta = "SELECT * FROM usuarios ORDER BY Nombre ASC";
$execute=$conex->query($consulta);
if ($conex->error): {
  die("Error en la consulta: " .$conex->error); 
 } endif;

/*  INNER JOIN  */

$innercia = "SELECT u.id_Usuario, u.Nombre, u.Apellidop, u.ApellidoM, u.Email,u.FechaN, u.Id_Tuser, t.Id_Tuser, t.NombreT, t.Descripcion 
        FROM usuarios as u 
        INNER JOIN tusuario as t ON u.Id_Tuser = t.Id_Tuser";

$ejex = $conex->query($innercia);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <title>tabla dinamica</title>
  
</head>
<body>
  <div class="container">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <h2 class=" text-center"> Tabla dinamica</h2>

      <div class="table-responsive table-hover">
        <table name="tabla" class="td_tabla">
          <thead class="text-muted">
            <th class="text-center"> Nombre</th>
            <th class="text-center"> Apellido Paterno</th>
            <th class="text-center"> Apellido Materno</th>
            <th class="text-center"> Email</th>
            <th class="text-center"> Fecha de Nacimiento</th>
            <th class="text-center">Tipo de usuario</th>
            
    
          </thead>  
          <tbody>
          <?php while($row=$ejex->fetch_array()){?>
            <tr>
              <td><?php  echo $row ['Nombre']; ?></td>
              <td><?php  echo $row ['Apellidop']; ?></td>
              <td><?php  echo $row ['ApellidoM']; ?></td>
              <td><?php  echo $row ['Email']; ?></td>
              <td><?php  echo $row ['FechaN']; ?></td>
              <td><?php  echo $row ['Id_Tuser']; ?></td>     
              <td><a href="">-Editar</a> <a href="#">-Borrar</a></td>
            </tr>
    
            <?php }?>
          </tbody>
         </table>
      

    </div>
  </div>



  </div>
</body>
</html>