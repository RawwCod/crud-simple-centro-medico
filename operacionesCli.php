<?php
include "./function/head.php";
include "./function/nav.php";
include "./function/header.php";
include './function/listar.php';
?>
<h3>Centro de Operaciones para contratar servicios</h3><hr>
<?php
if (isset($data)) {

    for ($i = 0; $i < count($data); $i++) {
        ?>
        <div class="col-md-2">
            <div class="thumbnail">
                <?php if ($data[$i] == "Femenino") { ?>
                    <img src="img/f.jpg" alt="Cinque Terre" style="width:100%">
                <?php } else { ?>
                    <img src="img/m.jpg" alt="Cinque Terre" style="width:100%">
                    <?php
                };
                $i++;
                ?>
                <div class="caption">
                    <p><b>Cedula:</b><?=
                        $data[$i];
                        $i++;
                        ?></p>
                    <p><b>Nombre:</b><?=
                        $data[$i];
                        $i++;
                        ?></p>
                    <p><b>Apellido:</b><?=
                        $data[$i];
                        $i++;
                        ?></p>
                    <p><b>Edad:</b><?=
                        $data[$i];
                        $i++;
                        ?></p>
                </div>
                <div class="text-center" style="width: 100%">
                    <div style="display: inline-block; width: 47%;">
                        <a href="anadirCliSer.php?id=<?= $data[$i] ?>">
                            <button style="width: 100% length:100%" type="button" class="btn btn-warning">Contratar</button>
                        </a>
                    </div>
                    <div style="display: inline-block; width: 47%;">
                        <form action="listarCliSer.php" method="POST">
                            <input type="hidden" name="idCli" value="<?= $data[$i]?>">
                            <button style="width: 100% length:100%" type="submit" class="btn btn-danger">Ver</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "No se encontro ningun registro para listar.";
}
?>


<?php
include "./function/footer.php";
?>