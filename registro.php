<?php
include "include/conexion.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Actividad 1</title>
</head>
<body>
    <div class="container m-o content-justify-center px-2">
        <div class="row text-center">
            <h1 class="text-success-emphasis">Registro</h1>
        </div>
        <form id="registro" action="<?php echo $_SERVER['PHP_SELF'];?>" Method="POST">
        <div class="row-text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
            </div>
        </div>
        <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="text" name="apellido" class="form-control" placeholder="Apellidos" required>
        </div>
        <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <textarea name="direccion" class="form-control" placeholder="Direccion" required></textarea>
        </div>
        <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="tel" name="telephone" class="form-control" placeholder="55-55-55-55" required>
        </div>
        <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="Date" name="fecha" class="form-control" required>
        </div>
        <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="text" name="apellido" class="form-control" placeholder="Apellidos" required>
        </div>

    </form>
    </div>
</body>
</html>