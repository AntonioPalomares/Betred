<?php
$row=$_REQUEST;
if($row['nombre']==NULL)
{
    echo "El campo nombre, no puede quedar vacio";
}
echo $row['nombre'];
?>