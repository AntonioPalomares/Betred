<?php




$nombre=$_POST['nombre'];
$tarjeta=$_POST['tarjeta'];
$sexo=$_POST['sexo'];
$estado=$_POST['estado'];
$rfc=$_POST['rfc'];
$flotilla=$_POST['flotilla'];
$celular=$_POST['celular'];
$correo=$_POST['correo'];



include_once('funciones/conexion.php');
ini_set('display_errors', 1);
try{


    $sql = "SELECT * FROM clientes WHERE tarjeta=$tarjeta";
    $resultado = $conexion->query($sql);
    $row = mysqli_fetch_assoc($resultado);

}catch(Exception $e){
  $error = $e->getMessage();
}
                if($row["tarjeta"]<>NULL){
                            $tarjeta2=$row["tarjeta"];
                }
         $idt=$row['id'];
         if($tarjeta2==$tarjeta){
           
                 $tarjetadub=0;
             
         }
         else{
             $tarjetadub=1;
         }
        
        if($nombre==NULL || $tarjeta==NULL || $rfc==NULL  || $tarjeta==0 || $tarjetadub==0 )

        {
        
           $ruta="location: altasmodificaciones.php?idm=0&dub=1";
     

            //echo "Complete todos los campos, por favor";
       
     header($ruta);
        //exit;
           // header ("altasmodificaciones.php");
        }

else{
    include_once('funciones/conexion.php');


   

    
    ini_set('display_errors', 1);
    try{
    
    
        $sql = "INSERT INTO clientes (id,flotilla,estado,nombre,celular,correo,sexo,rfc,tarjeta,saldo)
    VALUES (NULL, '$flotilla', '$estado', '$nombre', '$celular', '$correo', '$sexo', '$rfc', '$tarjeta', '0')";    
        $resultado = $conexion->query($sql);
    
        
    }catch(Exception $e){
      $error = $e->getMessage();
    
    }
    
ini_set('display_errors',1);

header ("Location:  principal.php");



        
}

?>
                    

                