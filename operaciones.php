<?php
if(isset($_POST['btnsum'])){
  $Nume1 = $_POST['nu1'];
  $Nume2 = $_POST['nu2'];
  
  if(!is_numeric($Nume1)){
    echo "El valor de la caja 1 no es un valor numerico";
  }
  else if(!is_numeric($Nume2)){
    echo "El valor de la caja 2 no es un valor numerico";

  }
  else{
    $rest = $Nume1 + $Nume2;
    echo "El resultado es: ".$rest;
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones con PHP</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="nu1" placeholder="Ingresa numero" required> +
    <input type="text" name="nu2" placeholder="Ingresa numero" required> 
    <input type="submit" value="Sumar" name="btnsum">

</form>
</body>
</html>