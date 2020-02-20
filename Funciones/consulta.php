<?php
 include_once('Funciones/Conexion.php') ; 
        ini_set('display_errors', 1);
        try{

        
            $sql = "SELECT * FROM clientes ";
            $resultado = $conexion->query($sql);

              



        }catch(Exception $e){
          $error = $e->getMessage();
        }
      ?>

                