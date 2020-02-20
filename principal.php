
<!DOCTYPE html>
<html lang="en">
  
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CCS/bootstrap.min.css">
    <script src="JS/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        
    <div class="pl-5">
       
        <div class="container ml-7">
            <div class="row pt-5 pl-5">
                <div class="col align-self-center border border-dark">
                    
                    
                     
                    
                        
                        <h3 class="text-center">
                            
                               Buscar Cliente
                            
</h3>
                               <div class="text-right">
                    <a href="altasmodificaciones.php?idm=0&dub=0" class="badge badge-primary">Dar de alta un cliente </a>
                    
                    </div>

                </div>

            </div>

        </div>
        </div>
        <div class="col align-self-center border border-blue">
            <form action="principal.php" method="POST">
            <div class="form-group col-lg-3">
                
            <input type="text" class="form-control" id="buscar"  placeholder="Nombre del cliente/Tarjeta" name="buscar">
        
            <button type="submit" type="button"  class="btn btn-primary" style="position:absolute;right :-20%;top:0%;">
                 Buscar
                          </button>
                          
                          <?php
                        error_reporting(0);
                          $buscar=$_POST['buscar'];
                          ?>
                    <br>
                    
                <table class="table table-striped col-md-4 col-xs-6">
                    <thead>
                        <tr>
                            <th>
                                #                                                      
                            </th>
                            <th>
                                nombre
                            </th>
                            <th>
                                Tarjeta
                            </th>
                            <th>
                                Saldo
                            </th>
                            <th>
                                Estado
                            </th>
                            <th>
                            Tarjeta adicional

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    <?php 
                    if($buscar==NULL){
                    include_once('Funciones/consulta.php') ; 
                    }

                    else{
                        include_once('Funciones/Conexion.php') ; 

                        ini_set('display_errors', 1);
                        try{
                
                        
                            $sql = "SELECT * FROM clientes WHERE nombre like '%$buscar%' or tarjeta like '%$buscar%'";
                            $resultado = $conexion->query($sql);
                
                
                        }catch(Exception $e){
                          $error = $e->getMessage();
                        }
                    }
                       
                 
                        
                        while($row = mysqli_fetch_assoc( $resultado)) {?>
                          
                                <?php
                           $id= $row["id"];
                           
                            $nombre =$row['nombre'];
                            $tarjeta = $row['tarjeta'];
                            $saldo =$row['saldo'];
                            $status = $row['estado'];
                            $flotilla =$row['flotilla'];
                            ?>
                    
                            <td>
                            <?php 
                          echo $id;
                          if($id==NULL){
                            echo "sin resultados";
                        }
                          ?>
                            </td>

                            <td>
                            <?php 
                          echo $nombre;
                          ?>
                            </td>
                            <td>
                            <?php 
                          echo $tarjeta;
                          ?>
                            </td>
                    
                            <td>
                            <?php 
                          echo $saldo;
                          ?>
                            </td>
                            <td>
                            <?php 
                          echo $status;
                          ?>
                            </td>
                            <td>
                            <?php 
                            if($flotilla==1){
                                echo "Si";
                            }
                            else{
                            echo "No";
                            }
                          ?>
                            </td>
                            <td>
                            <?php $idm=$id ?>
                            <a href="modificacionyaltas.php?idm=<?php echo $id ?>&dub=0">Modificar </a>
                            

                        </td>
                        <td><a href="tarjetas.php?id=<?php echo $id ?>">Informacion de cuenta </a></td>


                        

                            </tbody>

                            <?php
                        
                            }
                            ?>
                            </table>
                            
                        
                    
                
                
            </div>
            </form>

        </div>

    </body>
</html>