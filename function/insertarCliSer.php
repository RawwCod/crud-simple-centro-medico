<?php

include 'conexion.php';

$sql = "INSERT INTO sercliente(idCliente, idServicio, fechaEntrega) VALUES (:CLI, :SER, '2022-12-04')";
$conn = dbConnect();
$stmt = $conn->prepare($sql);
$stmt->execute([":CLI"   => $_POST['idCli'],
                ":SER"   => $_POST['idSer']
                ]);
?>
<html>
    <form action="../listarCliSer.php" method="POST">
        <input type="hidden" name="idCli" value="<?= $_POST['idCli']?>">
        <input type="submit" value="Enviar">
    </form>
</html>

