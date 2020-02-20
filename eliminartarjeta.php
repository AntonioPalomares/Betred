<?php
$tarjeta=$_GET['tarjeta'];
$id=$_GET['id'];

include_once('Funciones/Conexion.php') ; 
ini_set('display_errors', 1);
try{


    $sql = "DELETE FROM tarjetas_adicionales WHERE id_tarjeta=$tarjeta ";
 

    $resultado = $conexion->query($sql);



}catch(Exception $e){
  $error = $e->getMessage();
}
$ruta="location: Tarjetas.php?id=".$id;


header($ruta);
?>