<?php


$flotilla=$_POST['id'];
$tarjeta=$_POST['tarjeta'];
$nombre=$_POST['nombre'];


include_once('funciones/conexion.php');
ini_set('display_errors', 1);
try{


    $sql = "SELECT * FROM tarjetas_adicionales WHERE id_tarjeta=$tarjeta";
    $resultado = $conexion->query($sql);
    $row = mysqli_fetch_assoc($resultado);

}catch(Exception $e){
  $error = $e->getMessage();
}
           
     $tarjeta2=$row["id_tarjeta"];  
                
         if($tarjeta2==$tarjeta){
           
                 $tarjetadub=0;
             
         }
         else{
             $tarjetadub=1;
         }
             
        if($nombre==NULL || $tarjeta==0 || $tarjetadub==0 )

        {
        
           $ruta="location: altatarjeta.php?dub=1&flotilla=".$flotilla;
     

            //echo "Complete todos los campos, por favor";
       
  
        //exit;
           // header ("altasmodificaciones.php");
        }

    else{
    include_once('funciones/conexion.php');


   

    
    ini_set('display_errors', 1);
    try{
    
        echo $flotilla;
        $sql = "INSERT INTO tarjetas_adicionales (id_tarjeta,flotilla,nombread)
    VALUES ('$tarjeta', '$flotilla',  '$nombre')";    
        $resultado = $conexion->query($sql);
    
        
    }catch(Exception $e){
      $error = $e->getMessage();
    
    }
    
ini_set('display_errors',1);

$ruta="location: Tarjetas.php?id=".$flotilla;

}
header($ruta);


?>