
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
    
  $id=$_GET['flotilla'];
  $dub=$_GET['dub'];


  ?>
        <div class="row pt-3">
            <div class="col-lg-6 border border-dark">
               <div class="pt-3">
               
      
                <h3>Nueva tarjeta adicional</h3>
                <?php
                if($dub==1){

            
echo "<h3>Hubo un erro en los datos ingresados, verifique los datos!!! </h3>";
 
 }?>
                
               </div>
               
               
                <form  action="altatarjetaback.php" method="POST">
                 <div class="form-group"> 
               
                 <input type="hidden" name="id" value="<?php echo $id?>">
                   
                    <input type="text" class="form-control" id="nombre"  placeholder="Nombre" name="nombre">
                    <br>
                    
   
        
                       <input type="number" class="form-control" id="tarjeta"  placeholder="Tarjeta adicional" name="tarjeta">
                       <br>
              


                      
                       <input type="submit" value="Agregar" class="btn btn-success" style="position:absolute;right:3%;top:80%;" > 
                      
                      </form>
                <br>
                <?php
                $ruta="Tarjetas.php?id".$id;
                ?>
                      <form action="Tarjetas.php" method="POST">
                      <input type="hidden" value=<?php echo $id?> name='id'>
                      <button type="submit" class="btn btn-danger" style="position:absolute;right:20%;top:80%;">Cancel</button>
                      </form>
                      
                </div>
                
            </div>
            
        </div>

    </div>
</body>
</html>