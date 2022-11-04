<?php

include 'conexion.php';

$conn = dbConnect();

$campos = ['idServicio', 'nombre', 'costo'];

$sql = "SELECT * FROM servicios WHERE idServicio = {$_GET['id']}";
foreach ($conn->query($sql) as $row) {
    foreach ($campos as $value) 
         $var[] = $row[$value];
}
return $var;