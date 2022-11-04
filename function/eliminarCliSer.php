<?php

include './conexion.php';

$conn = dbConnect();
$sql = "DELETE FROM sercliente WHERE idServicio=:SER and idCliente=:CLI";
$resultado = $conn->prepare($sql);
$resultado->execute([
    ":CLI"   => $_POST["idCli"], 
    ":SER"   => $_POST["idSer"]
    ]);
$resultado->closeCursor();

header("location: ../operacionesCli.php");