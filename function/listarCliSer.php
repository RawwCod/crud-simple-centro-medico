<?php
$idcliente=$_POST['idCli'];
$sql = "SELECT nombre, apellido, id FROM estudiantes where id = $idcliente";
foreach ($conn->query($sql) as $row) {
    $dato[] = $row['nombre'];
    $dato[] = $row['apellido'];
    $dato[] = $row['id'];
}