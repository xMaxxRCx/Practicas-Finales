<?php 
include "conexion.php";
if(isset($_POST['botn'])){
$Nl = $conex->real_escape_string($_POST['nombrel']);
$direccio = $conex->real_escape_string($_POST['direci']);
$tel = $conex->real_escape_string($_POST['telef']);
$eml = $conex->real_escape_string($_POST['correo']);
$fbk = $conex->real_escape_string($_POST['fb']);
$horario = $conex->real_escape_string($_POST['horario']);
if($Nl == "" || $direccio == "" || $tel == "" || $eml =="" || $fbk == "" || $horario == ""){
    $oyetu ="Alguno de tus datos estan vacios";

}
else{
    $inse = "INSERT INTO lugar(NombreL,Descripcion,Telefono,Email,Facebook,Horario) VALUES('$Nl','$direccio','$tel','$eml','$fbk','$horario')";
    $ejex = $conex->query($inse);
    if($ejex>0){
        echo"registro exitoso";
    }else{
        echo"error al registrar";
    } 
}
}
?>