<?php
//  para declarar variables iniciamos con el signo de $ + nombre + asignacion de tipo de dato o valor
$varia = 70;
$message = "El valor de la variable es: ";
$nu1 = 8; 
$nu2 = 9;
$nu3 = 66;
$rad = 4;
$suma = $nu1 + $nu2 + $nu3;
$resta = $nu1 - $nu2 - $nu3;
$multi = $nu1 * $nu2 * $nu3;    
$divi = $nu1 / $nu2 / $nu3;
define('pi','3.1416' );
$decrement = 10;
$increment = 20;
echo "La suma de ".$nu1." + ".$nu2." + ".$nu3. " es: ".$suma."<br>";
echo "La resta de ".$nu1." - ".$nu2." - ".$nu3. " es: ".$resta."<br>";
echo "La multiplicacion de ".$nu1." * ".$nu2." * ".$nu3." es: ".$multi."<br>";
echo "La division de ".$nu1." / ".$nu2." / ".$nu3. " es: ".$divi."<br>";
// echo var_dump(constant('Hora'))."<br>";
// echo var_dump($suma);   
// echo $message, $varia;
// ----------------------------
// area de un circulo
$cir = pi * $rad * $rad;
$message2 = "El area del circulo con el radio de: ".$rad. " por el valor de pi que es: ".pi. " el resultado es: ".$cir;
echo $message2."<br>";
echo var_dump(constant('pi'))."<br>";
echo "El valor de decremento es: ".--$decrement."<br>";
echo "El valor de incremento es: ".++$increment."<br>";


?>