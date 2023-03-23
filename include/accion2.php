<?php 
include "conexion.php";
if(isset($_POST['but'])){
$nombreP = $conex->real_escape_string($_POST['noplan']);
$claveP = $conex->real_escape_string($_POST['clave']);
$direccion = $conex->real_escape_string($_POST['direc']);
$telefono = $conex->real_escape_string($_POST['telefono']);
$responsable = $conex->real_escape_string($_POST['resp']);
if($nombreP == "" || $claveP == "" || $direccion == "" || $telefono =="" || $responsable == ""){
    $hey ="Alguno de tus datos estan vacios";

}
else{
    $agrega = "INSERT INTO plantel(NombrePlantel,ClaveP,Direccion,Telefono,Responsable) VALUES('$nombreP','$claveP','$direccion','$telefono','$responsable')";
    $god = $conex->query($agrega);
    if($god>0){
        echo"registro exitoso";
    }else{
        echo"error al registrar";
    } 
}
}
?>