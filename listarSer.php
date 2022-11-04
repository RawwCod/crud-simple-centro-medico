<?php
include "./function/head.php";
include "./function/nav.php";
include "./function/header.php";
include './function/listarSer.php';
?>
<h3>Listado de Registro de Servicios</h3><hr>
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
                        <a href="editarSer.php?id=<?= $data[$j] ?>">
                            <button style="width: 100%" type="button" class="btn btn-warning">Editar</button>
                        </a>
                    </div>
                    <div style="display: inline-block; width: 47%;">
                        <a href="./function/eliminarSer.php?id=<?= $data[$j] ?>" onclick="return confirm('Desea eliminar el Servicio?');">
                            <button style="width: 100%" type="button" class="btn btn-danger">Eliminar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
 else {
    echo "No se encontro ningun registro para listar.";
}
?>


<?php
include "./function/footer.php";
?>