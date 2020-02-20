<html>
<!DOCTYPE html>
<html lang="en">
    <?php
    $buscar="";
    
    ?>
<html>
<?php
error_reporting(0);
$id2=$_POST['id'];
error_reporting(0);
$id3=$_GET['id'];

if($id2>0){
   
    $id=$id2;
   
}
else{
    
    $id=$id3;
    
}
error_reporting(0);
include_once("funciones/conexion.php");
ini_set('display_errors', 1);
    try{

    
        $sql = "SELECT nombre,flotilla,saldo,tarjeta FROM clientes WHERE id=$id";
        $resultado = $conexion->query($sql);
        $row = mysqli_fetch_assoc($resultado);

          
        


    }catch(Exception $e){
      $error = $e->getMessage();
    }

    $nombre=$row['nombre'];
    $flotilla=$row['flotilla'];
    $saldo=$row['saldo'];
    $tarjeta=$row['tarjeta'];
?>
    <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CCS/bootstrap.min.css">
    <script src="JS/bootstrap.bundle.min.js"></script>
    </head>
    <body>
    <div class="container ml-9">
    
    <div class="col align-self-center border border-dark">
    
<div class="row">

<nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">   <h3>Informacion de la cuenta    </h3>
    <h3 class="text-left">
<h1 class=" text-center">
<h6><a href="principal.php">Volver </a></h6>
<h3 class="text-top">
<span class="badge badge-secondary">
<nav aria-label="breadcrumb">
<h4> Tarjeta</h4>
<h4>---------------------------</h6>
<?php
echo "#",$tarjeta;
?>
<h4>---------------------------</h6>  
<h4> Saldo</h4>
<h4>---------------------------</h6> 

<?php
echo "$",$saldo;
?>
</h3>
</h1>
</span>
   </nav>
   </h3>

</li>
  </ol>
</nav>



<div class="col sm-3">
<div class="col align-self-center text-center">





<span class="badge badge-secondary">
<nav aria-label="breadcrumb">
<h3>
<?php
echo $nombre
?>
</h3>
<h4>---------------------------</h6>
<h3>
<?php

if($flotilla==1){
    echo "Cliente flotilla";
}
else{
    echo "Cliente regular";
}
?>
</h3>
</nav>


</span>

 


</h1>


<h1 class="col sm-4">
<h1 class="text-right"> 
<h1 class=" px-1">


<?php
if($flotilla==1)
{?>
<span class="badge badge-secondary">
<?php
    echo "    Tarjetas adicionales";
?>

 <?php 
}

?>



<?php
if($flotilla==1){
    
        ?>

     

      <div class="row">
     
      <h1 class="col sm-4">
<h1 class="text-right"> 
<h1 class=" px-1">
      <table class="table">
 
      <thead class="thead-dark">
                   
                        <tr>
                        <th></th>
                            <th>
                                #                                                     
                            </th>
                            <th></th>
                           
                            <th>
                                Nombre
                            </th>
                            <th>
                            <th></th>
                            
                            
                           </th>
                       <th></th>
                           <th>
                                Tarjeta
                           </th>
                           <th></th>
                           <th></th>
                           <th>    <a href="altatarjeta.php?flotilla=<?php echo $id ?>&dub=0">Agregar+ </a>   </th>
                        </tr>
                    </thead>
                  
                    <?php
                    $n=1;
            ini_set('display_errors', 1);
            try{
    
            
                $sql = "SELECT * FROM tarjetas_adicionales WHERE flotilla=$id";
                $resultado = $conexion->query($sql);
    
    
            }catch(Exception $e){
              $error = $e->getMessage();
            }
        
        while($row = mysqli_fetch_assoc( $resultado)) {
                          
            
   
       
        $nombread =$row['nombread'];
        $tarjetaad = $row['id_tarjeta'];

      ?>
                    <th>
                    <td>
                            <?php 
                          echo $n;
                          ?>
                           
                            </td>
                            <td></td>
                       <td>
                            <?php 
                          echo $nombread;
                          ?>
                            </td>
                            <th></th>
                            <td></td>
                            <td></td>
                            

                            <td>
                            <?php 
                          echo $tarjetaad;

                          ?>
                          
                            </td>
                            <th></th>
                            <th></th>
                            <td><a href="eliminartarjeta.php?tarjeta=<?php echo $tarjetaad?>&id=<?php echo $id?>">Eliminar- </a></td>
                            

                           
    </th>
      </tbody>
    
    <?php
    $n=$n+1;
        }

    
    ?>
    <h1>
    </h1>
</div>
    </h1>
</span>


</div>

</div>








</div>



<?php
}?>



 </div>
 
</body>
 






   




</html>
