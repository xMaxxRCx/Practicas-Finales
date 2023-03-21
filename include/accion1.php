<?php 
include "conexion.php";
if(isset($_POST['btn'])){
$Nombre = $conex->real_escape_string($_POST['nombre']);
$Apellidos = $conex->real_escape_string($_POST['apellido']);
$Direccion = $conex->real_escape_string($_POST['direccion']);
$Telefono = $conex->real_escape_string($_POST['telephone']);
$Fecha = $conex->real_escape_string($_POST['fecha']);
$Email = $conex->real_escape_string($_POST['correo']);
if($Nombre == "" || $Apellidos == "" || $Direccion == "" || $Telefono =="" || $Fecha == "" || $Email == ""){
    $Oye ="Alguno de tus datos estan vacios";

}
else{
    $inserta = "INSERT INTO usuarios(Nombre, Apellidos, Direccion, Telefono, FechaN, Email) VALUES('$Nombre','$Apellidos','$Direccion','$Telefono','$Fecha','$Email')";
    $registra = $conex->query($inserta);
    if($registra>0){
        echo"registro exitoso";
    }else{
        echo"error al registrar";
    } 
}
}
?>