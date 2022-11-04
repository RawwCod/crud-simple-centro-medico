<?php

include 'conexion.php';
$conn = dbConnect();

$sql = "SELECT * FROM servicios order by idServicio DESC";
foreach ($conn->query($sql) as $row) {
    $data[] = $row['nombre'];
    $data[] = $row['costo'];
    $data[] = $row['idServicio'];
}

function filtrar($id) {
    $conn = dbConnect();
    $sql = "SELECT * FROM servicios INNER JOIN sercliente on servicios.idServicio = sercliente.idServicio WHERE sercliente.idCliente = $id";
    foreach ($conn->query($sql) as $row) {
        $data[] = $row['nombre'];
        $data[] = $row['costo'];
        $data[] = $row['idServicio'];
    }
    return $data;
}

function filtrarSer($id) {
    $conn = dbConnect();
    $sql = "SELECT * FROM servicios WHERE sercliente.idServicio!=(case when sercliente.idcliente=$id then sercliente.idServicio else 0 end)";
    foreach ($conn->query($sql) as $row) {
        $data[] = $row['nombre'];
        $data[] = $row['costo'];
    }
    return $data;
}