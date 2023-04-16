<?php
//  practica para calcular el promedio de 5 calificaciones para indicar si esta reprobado o esta aprobado segun el valor del promedio
$cali1 = 10;
$cali2 = 7;
$cali3 = 6;
$cali4 = 8;
$cali5 = 5;
$minimo = 7;

if(is_numeric($cali1) && is_numeric($cali2)&& is_numeric($cali3)&& is_numeric($cali4)&& is_numeric($cali5)){
  $promedio = ($cali1+$cali2+$cali3+$cali4+$cali5)/5;
  if($promedio >= $minimo){
    echo "Estas aprobado <br>";
  }
  else{
    echo "estas reprobado <br>";
  }
  echo "tu promedio es: ".$promedio;
}
else{
    $message = "alguno de los valores no es numerico";
    echo $message;
}

/*
 if(is_numeric($cali1)){
    $cali1 = $cali1;
 }
 else{
    echo "el valor de la calificacion 1 no es numerico";
 }
 if(is_numeric($cali2)){
    $cali2 = $cali2;
 }
 else{
    echo "el valor de la calificacion 2 no es numerico";
 }
 if(is_numeric($cali3)){
    $cali3 = $cali3;
 }
 else{
    echo "el valor de la calificacion 3 no es numerico";
 }
 if(is_numeric($cali4)){
    $cali4 = $cali4;
 }
 else{
    echo "el valor de la calificacion 4 no es numerico";
 }
 if(is_numeric($cali5)){
    $cali5 = $cali5;
 }
 else{
    echo "el valor de la calificacion 5 no es numerico";
 }
 $promedio = ($cali1 + $cali2 + $cali3 + $cali4 + $cali5)/5;
 if($promedio >= $minimo){
    echo "Pasaste";
 } 
 else{
    echo "no pasaste";
 }
 */

?>
