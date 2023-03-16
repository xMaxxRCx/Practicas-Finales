<?php
error_reporting (0);
if(isset($_POST['btn'])){
    $numero1 = $_POST['Caja1'];
    $numero2 = $_POST['Caja2'];
    $numero1 = (int)$numero1;
    $numero2 = (int)$numero2;
    $resultado = $numero1 + $numero2;
    $valor = $resultado;
    echo $valor;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <script src="js/jquery.js"></script>
    <title>Practica1 con php</title>
</head>
<body>
    <script src="js/bootstrap.min.js" ></script>
    <!-- navbar -->
    <?php include "include/navbar.php" ?>
    <?php  include "include/menu.php"?>
    <?php include "include/menusu.php" ?>
    
</body>
</html>