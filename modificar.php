<?php
$id=$_POST['id'];
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
                if($row["tarjeta"]!=NULL){
                            $tarjeta2=$row["tarjeta"];
         $idt=$row['id'];
         if($tarjeta2==$tarjeta){
             if($id==$idt){
                 $tarjetadub=1;
             }
             else{
                 $tarjetadub=0;
             }
         }
         else{
             $tarjetadub=1;
         }
        }
        if($nombre==NULL || $tarjeta==NULL || $rfc==NULL  || $tarjeta==0 || $tarjetadub==0 )

        {
        
                     $ruta="location: modificacionyaltas.php?dub=1&idm=".$id;

            //echo "Complete todos los campos, por favor";
        echo $tarjeta;
        echo $tarjeta2;
     header($ruta);
        //exit;
           // header ("altasmodificaciones.php");
        }
else{
    include_once('funciones/conexion.php');
        ini_set('display_errors', 1);
        try{
        
        
            $sql = "UPDATE clientes SET  nombre = '$nombre', flotilla='$flotilla', estado='$estado',celular='$celular', correo='$correo',sexo='$sexo',rfc='$rfc',tarjeta='$tarjeta' WHERE id = $id";    
            $resultado = $conexion->query($sql);

    }catch(Exception $e){
        $error = $e->getMessage();
      }
ini_set('display_errors',1);
header ("Location:  principal.php?buscar=");

    }

?>
