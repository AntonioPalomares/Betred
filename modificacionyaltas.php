
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CCS/bootstrap.min.css">
    <script src="JS/bootstrap.bundle.min.js"></script>
</head>
<body>
  
    <div class="container mr-0 pr-8">
    <?php 
    
  $idmod2=$_GET['idm'];
$dub=$_GET['dub'];
if($idmod2==NULL){
  $idmod2=0;

}
  if($idmod2>0){
    include_once('Funciones/Conexion.php') ; 
    ini_set('display_errors', 1);
    try{

    
        $sql = "SELECT * FROM clientes WHERE id=$idmod2";
        $resultado = $conexion->query($sql);
        $row = mysqli_fetch_assoc($resultado);

          



    }catch(Exception $e){
      $error = $e->getMessage();
    }
                          
 $nombre =$row['nombre'];
 $tarjeta = $row["tarjeta"];
 $saldo =$row['saldo'];
 $estado = $row['estado'];
$flotilla=$row['flotilla'];
if($flotilla==1){
  $flotillaT="Flotilla: Si";
}
else{
  $flotillaT="Flotilla: No";
}
 $correo=$row['correo'];
 $sexo=$row['sexo'];
 $celular=$row['celular'];
 $rfc=$row['rfc'];

}
else{
  $flotillaT="Flotilla";
  
  $rfc="";
  $nombre="";
  $tarjeta="";
  $estado="Estado";
  $flotilla="";
  

  $sexo="Sexo";
  $correo="";
  $celular="";

}

  ?>
        <div class="row pt-3">
            <div class="col-lg-6 border border-dark">
               <div class="pt-3">
               <?php
            if($dub==1){

            
            echo "<h3>Hubo un erro en los datos ingresados, verifique los datos!!! </h3>";
             
             }?>
                <h3>Alta/modificacion de cliente</h3>
                
               </div>
               
               
                <form  action="modificar.php" method="POST">
                 <div class="form-group"> 
                 <output name="id" value="<?php echo $idmod2?>"></output>
                 <input type="hidden" name="id" value="<?php echo $idmod2 ?>">
                   
                    <input type="text" class="form-control" id="nombre"  placeholder="Nombre" name="nombre" value=<?php echo $nombre?>>
                    <br>
                    
                    <input type="number" class="form-control" id="celular"  placeholder="Celular" name="celular"value=<?php echo $celular?>>
                    <br>
                    <input type="text" class="form-control" id="correo"  placeholder="Correo" name="correo" value=<?php echo $correo?>>
                   <br> 
                   
                         <select class="custom-select" id="sexo" name="sexo" >
                         
                        <option value=<?php echo $sexo ?> selected><?php echo $sexo?></option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        
                         </select>

                           <br>

                       
                        <br>
                       <input type="text" class="form-control" id="rfc"  placeholder="RFC" name="rfc" value=<?php echo $rfc?>>
                        <br>
                       <input type="number" class="form-control" id="tarjeta"  placeholder="Tarjeta" name="tarjeta" value=<?php echo $tarjeta?>>
                       <br>
                       <select class="custom-select" name="estado" >
                         
                        <option selected value=<?php echo $estado?>><?php echo $estado?></option>

                        <option value="activo">Activo</option>
                        <option value="suspendido">Suspendido</option>
                        <option value="inactivo">Inactivo</option>
                        
                        </select> 

                       <br>
                       <br>
                       

                     
                      

                      
                      <select class="custom-select" name="flotilla" >
                         
                         <option selected value=<?php echo $flotilla?>><?php echo $flotillaT?></option>
                         <option value=1>Si</option>
                         <option value=0>No</option>
                         
                         
                         </select>
                         
                    <br>
                      
                       <input type="submit" value="Modificar" class="btn btn-success" style="position:absolute;right:3%;top:90%;" > 
                      
                      </form>
                      <br>
                      <br>
                      <br>
                      <br>
                      <form action="principal.php" method="POST">
                      <input type="hidden" value="" name="buscar">
                      <button type="submit" class="btn btn-danger" style="position:absolute;right:20%;top:90%;">Cancel</button>
                      </form>
                      
                </div>
                
            </div>
            
        </div>

    </div>
</body>
</html>