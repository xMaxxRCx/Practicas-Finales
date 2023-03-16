<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="col-lg-12">
        <div class="row">
            <h1 class="text-center">Sumas</h1>
        </div>
        <div class="row">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>"
            method="POST">
            <input type="text" name="Caja1" required> +
            <input type="text" name="Caja2" required> =
            <input type="submit" name="btn" value="Calcular">

            </form> 
        </div>
    </div>
</body>
</html>