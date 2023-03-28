<?php 
include "include/query.php";
include "include/conexion2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Dinamica---</title>
</head>
<body>
    <table>
        <td>
            <th>id_Usuario</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
        </td>
        <td>
            <?php while($row=$Separatte){

            ?>
            <!-- Filas -->
            <td><?php echo $row['id_Usuario']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Apellidop']; ?></td>
            <td><?php echo $row['ApellidoM']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['FechaN']; ?></td>
            </td>
        <?php } ?>
    </table>
</body>
</html>