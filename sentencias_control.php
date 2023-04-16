<?php
  /* usar la sentencia if y else en su metodo alternativo
  usar constantes, variables, operadores aritmeticos, logicos y relacion
  Calcular la edad con años, meses, dias y horas utilizando el año de nacimiento e indicar si es mayor o menor de edad 
*/
  define('top', 2023);
  define('meses',12);
  define('dias',365);
  define('horas',24);
  $fechan = "2007";
  $mayore = 18;
  $edad = top - $fechan;
  $meses = $edad * meses;
  $days = $edad * dias;
  $horas = dias * horas * $edad;
  if(is_numeric($fechan) && is_numeric($mayore) && is_numeric($edad) && is_numeric($meses) && is_numeric($days) && is_numeric($horas)):
   if($edad >= $mayore):
    echo "eres mayor de edad por que tienes: ".$edad." años <br>";
    echo "son: ".$meses." meses de vida <br>";
    echo "son: ".$days." dias de vida <br>";
    echo "son: ".$horas. " horas de vida <br>";
   else:
    echo "eres menor de edad por que tienes: ".$edad." años <br>";
    echo "son: ".$meses." meses de vida <br>";
    echo "son: ".$days." dias de vida <br>";
    echo "son: ".$horas. " horas de vida <br>";
   endif;
else:
    echo "algunos de los valores de las variables no son valores numericos";
  endif;

?>