<?php
//  salida de datos true si el valor es string y false si no lo es
/*
$varios = array(false,true,null,'aeiou','12',12,'12.5','','','0',0);
foreach ($varios as $valor){
    echo "es un string(";
     var_export($valor);
    echo ") = ";
    echo var_dump(is_string($valor));
}
*/
 $message = "como estas?";
 if(is_string($message)){
    echo $message."<br>";
    var_dump($message);


 }
 else{
    echo "el valor del mensaje no es string es: ".$message;

 }

?>