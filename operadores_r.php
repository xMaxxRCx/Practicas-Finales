<?php 
 $v1 = 77;
 $v2 = 86;
 $v3 = 32;
 $persona = "Hombre";
 $letra = "z";
//  uso de if y el uso de operacores relacionales, logicos
 /* if(Condicion){
    codigo o accion a realizar si se cumple la condificon
 }
 else{
    si la accion no se cumple en el if, en el else se ejecutara otra accion 
 }
 */
//  operadores relacionales
/*
 if($v1 <= $v2){ 
    echo "verdadero";

 }
 else{
    echo "valor";
 }
 */
/*
 comparando variables con un string
  if($persona == 'Mujer'){
    echo "Ya que el genero de la persona es mujer su nombre es Isabell <br>";

  }
  else{
    echo "Como no se cumple la condicion entonces no puedo darte el nombre";
  }
*/
/* 
if($v1 > $v2 && $v1 > $v3){
   echo "El valor 1 es mayor que el 3 pero no el 2";
 }
 else if($v2 > $v1 and $v2 > $v3){
    echo "El valor 2 es mayor que el 1 y 3";
 }
 else if($v3 > $v1 and $v3 > $v2){
    echo "El valor 3 es mayor que el 1 y 2";
 }
 else{
    echo "No se cumple ninguna";
 }
*/
 if($letra == 'a' || $letra == '3' || $letra == 'i' || $letra == 'o' || $letra == 'u'){
  echo "la letra: ".$letra." es una vocal";
 }
 else{
    echo "la letra: ".$letra." es una consonante";
 }

?>