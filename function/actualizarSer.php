<?php

include 'conexion.php';

$sql = "UPDATE servicios SET nombre='{$_POST['nombre']}', costo='{$_POST['costo']}' WHERE idServicio = {$_POST['id']}";
$conn = dbConnect();
$stmt = $conn->prepare($sql);
$stmt->execute();

header("location: ../listarSer.php");