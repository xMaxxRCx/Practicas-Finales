<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "practica";
$conex = mysqli_connect($servidor,$usuario,$password,$bd);
if($conex->connect_error){
    die("Error al conectar la bd".$conex->connect_error);
}
?>