<?php
//  uso de ciclo for
/*
for(iniciar el ciclo;condicion;incremento o decremento){
    sentencia o instruccion que se ejecutara si se cumple la condicion
}
*/
/* echo "la lista de numeros es: ";
for($i = 2; $i <= 26; $i = $i + 2){
 echo "</br>";
 echo $i;
 echo "</br>";
}
*/
/*
for($z = 1; $z <= 20; $z = $z + 1){
    echo $z." Ejecutando el ciclo";
    echo "</br>";
}
echo "Termina el ciclo";
*/
for($y = 1; $y <= 5; $y++):
 echo $y;
 echo "</br>";
endfor;
echo "termina el ciclo for ya que se repite ".$y;
?>