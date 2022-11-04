<?php
include "./function/head.php";
include "./function/nav.php";
include "./function/header.php";
include './function/listarSer.php';
$idCli=$_GET['id'];
//$data=filtrarSer($idCli);
?>
<h3>Seleccione el Servicio que desea contratar</h3><hr>
<?php
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
                    <div>
                        <!--                    termina el modal-->
                    </div>
                    <div class="text-center" style="width: 100%">
                        <div style="display: inline-block; width: 47%;">
                            
                            <form  action="function/insertarCliSer.php" method="post"  id="contact_form" onsubmit="return validarEmail()">
                                    <input type="hidden" name="idCli" value="<?= $idCli ?>">
                                    <input type="hidden" name="idSer" value="<?= $data[$j] ?>">
                                    <button style="width: 100% length:100%" type="submit" class="btn btn-success">Seleccionar</button>
                            </form>
                            
                        </div>
                        
                    </div>
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