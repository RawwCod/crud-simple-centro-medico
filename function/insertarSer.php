<?php

$var = ['nombre', 'costo'];

for ($i=0; $i < count($var); $i++) {
    $_POST[$var[$i]] = trim($_POST[$var[$i]]);
    if ( !isset($_POST[$var[$i]]) ) return header("location: ../registrarSer.php");
    if ( empty($_POST[$var[$i]]) )  return header("location: ../registrarSer.php");
}

$sql = "INSERT INTO servicios (nombre, costo) VALUES (:NOM, :COST)";
require 'conexion.php';
$conn = dbConnect();
$resultado = $conn->prepare($sql);

$resultado->execute([":NOM"   => $_POST[$var[0]],
                     ":COST"   => $_POST[$var[1]]
                    ]);

header("location: ../listarSer.php");