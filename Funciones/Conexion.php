<?php
 $conexion = new mysqli('localhost', 'root', '', 'betred');

 if($conexion->connect_error){
   echo $error -> $conexion->connect_error;
 }
 else
 {
     //echo "Conectado";
     
 }


?>