<?php
include "./function/head.php";
include "./function/nav.php";
include "./function/header.php";
include './function/listarSer.php';
include './function/listarCliSer.php';
?>
<h3>Servicios Contratados por <?php echo $dato[0]." ".$dato[1]?></h3><hr>
<?php
$data=  filtrar($_POST['idCli']);
if (isset($data)) {

    for ($j = 0; $j < count($data); $j++) {
        ?>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="img/imagen.png" alt="Cinque Terre" style="width:100%">
                    <?php
                ;
                ?>
                <div class="caption">
                    <p><b>Nombre:</b><?=
                        $data[$j];
                        $j++;
                        ?></p>
                    <p><b>Costo:</b><?=
                        $data[$j];
                        $j++;
                        ?></p>
                </div>
                <div class="text-center" style="width: 100%">
                    <div style="display: inline-block; width: 47%;">
                        <form action="./function/eliminarCliSer.php" method="POST">
                            <input type="hidden" name="idCli" value="<?= $dato[2]?>">
                            <input type="hidden" name="idSer" value="<?= $data[$j]?>">
                            <button style="width: 100% length:100%" type="submit" class="btn btn-danger" onclick="return confirm('Desea eliminar el servicio adquirido?');">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <div style="display: inline-block">
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
        <a href="operacionesCli.php"><button type="button" class="btn btn-default" > Volver <span class="glyphicon glyphicon-list"></span></button></a>
    </div>
    <?php
}
 else {
    echo "No se encontro ningun registro para listar.";
}
?>


<?php
include "./function/footer.php";
?>