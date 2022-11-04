<?php
include "./function/head.php";
include "./function/nav.php";
include "./function/header.php";
include "./function/editarSer.php";
//$var = filtrar($id);
?>

<form class="well form-horizontal" action="function/actualizarSer.php" method="POST"  id="contact_form" onsubmit="return validarEmail()">
    <fieldset>

        <!-- Form Name -->
        <legend>Formulario para actualizar Servicio</legend>

        <!-- Text input-->
        <div style="visibility: hidden; display: none;">
            <div class="form-group">
                <label class="col-md-4 control-label">id</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-align-center"></i></span>
                        <input readonly="" onkeypress="solonum()" onpaste="alert('No puedes pegar');return false" id="id" minlength="7" maxlength="8" required="" name="id" placeholder="Ingrese su cedula" class="form-control"  type="text" value="<?= $var[0]; ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Nombre</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input onkeypress = "return soloLetras(event)" onpaste="alert('No puedes pegar');return false" maxlength="38" required="" name="nombre" placeholder="Ingrese el nombre" class="form-control"  type="text" value="<?= $var[1]; ?>">
                </div>
            </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Costo</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-menu-right"></i></span>
                    <input onkeypress="solonum()" onpaste="alert('No puedes pegar');return false" maxlength="4" required="" name="costo" placeholder="Ingrese el costo" class="form-control"  type="text" value="<?= $var[2]; ?>">
                </div>
            </div>
        </div>

        <div class="text-center">
            <div style="display: inline-block">
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-warning">Actualizar<span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>
            </div>
            <div style="display: inline-block">
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <a href="listarSer.php"><button type="button" class="btn btn-default" > Volver <span class="glyphicon glyphicon-list"></span></button></a>
                    </div>
                </div>
            </div>
        </div>


    </fieldset>
</form>
</div><!-- /.container -->



<?php
include "./function/footer.php";
?>