<?php
include "./function/head.php";
include "./function/nav.php";
include "./function/header.php";
?>

<form class="well form-horizontal" action="function/insertarSer.php" method="post"  id="contact_form" onsubmit="return validarEmail()">
    <fieldset>

        <!-- Form Name -->
        <legend>Formulario de Registro de Servicio</legend>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Nombre</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input onkeypress = "return soloLetras(event)" onpaste="alert('No puedes pegar');return false" maxlength="38" required="" name="nombre" placeholder="Ingrese el nombre" class="form-control"  type="text">
                </div>
            </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Costo</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-menu-right"></i></span>
                    <input onkeypress="solonum()" onpaste="alert('No puedes pegar');return false" maxlength="2" required="" name="costo" placeholder="Ingrese el costo" class="form-control"  type="text">
                </div>
            </div>
        </div>

        <div class="text-center">
            <div style="display: inline-block">
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-warning" >Registrar<span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>
            </div>
            <div style="display: inline-block">
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="reset" class="btn btn-default" >Limpiar <span class="glyphicon glyphicon-repeat"></span></button>
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