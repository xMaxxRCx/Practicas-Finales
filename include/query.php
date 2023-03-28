<?php
include "include/conexion.php";
/* Consulta */
$Usuarios = "SELECT * FROM Usuarios";
$Ejecuta = $conex->query($Usuarios);
$Separatte = $Ejecuta->fetch_array(); 
?>