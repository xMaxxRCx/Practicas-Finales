<?php
/*
 foreach(expresion as $variable ){
    accion que se hara en el bucle
 }
*/
$arreglo = ["abcdefghijk","22","f","20.5",true];
echo "<pre>\n";
var_dump($arreglo);
echo "</pre>\n";
foreach($arreglo as $recorre){
    echo "<p>$recorre</p>\n";

}
echo "Termina el ciclo <br>";


?>