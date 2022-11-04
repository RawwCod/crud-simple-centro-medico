<!-- <nav class="navbar navbar-light" style="background-color: #e3f2fd; margin-bottom: 0%;">
    <a class="navbar-brand" id="ocultar" href="#">¡Centro Medico!</a>
    <ul class="nav navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Registrar<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="listar.php">Listar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target=".bs-example-modal-sm">Doctor</a>
        </li>
    </ul>
</nav> -->

<!-- Small modal -->
<!-- <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div>
                <div class="thumbnail">
                    <img src="img/doctor.jpg">
                    <div class="caption"><p class="text-center text-uppercase">Doctor Corazon <br><spam><b>Raul Huraccahua</b></spam></p></div>
                </div>
            </div>
        </div>
    </div>
</div> -->



<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="./css/Header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <header class="p-3 text-bg-info">

    <div class="container">

      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

        <ul class="menu">
                    <li><a href="#">Inicio</a>
                    
                <li><a href="./listar.php">Clientes</a>
                    <ul class="submenu">
                        <li><a href="./index.php">Registrar</a></li>
                    </ul>
                </li>
                <li><a href="./listarSer.php">Servicios</a>
                    <ul class="submenu">
                 <li><a href="./registrarSer.php">Registrar</a></li>
          </ul>
                <li><a href="./operacionesCli.php">Operaciones</a>
                <ul class="submenu">
               <li> <a href="#">Registrar Servicio</a></li>
        </ul>
        <li><a href="#">Operaciones</a>
              <ul class="submenu">
               <li> <a href="#"></a></li>

        </ul>

          <li><a href="#" class="nav-link px-2 text-white">About</a></li>

        </ul>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-white" placeholder="Search..." aria-label="Search">

        </form>



        <div class="text-end">

          <button type="button" class="btn btn-outline-light me-2">Login</button>

          <button type="button" class="btn btn-warning">Cerrar Sesion</button>

        </div>

      </div>

    </div>

  </header>
    </body>
</html>