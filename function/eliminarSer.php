<?php

include './conexion.php';

$conn = dbConnect();
$sql = "DELETE FROM servicios WHERE idServicio=:ID";
$resultado = $conn->prepare($sql);
$resultado->execute(array(":ID" => $_GET["id"]));
$resultado->closeCursor();

header("location: ../listarSer.php");