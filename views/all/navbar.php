<?php
require_once'../../modelo/Conexion.php';
require_once'../../controlador/class.citacion.php';
$valido = Citacion::rowcitacion("WHERE id_usuario='$_SESSION[id_usuario]'")
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">M-AS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Opciones
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="proyecto.php">Proyecto</a>
                            <a class="dropdown-item" href="updateuser.php">Actualizar Datos</a>
                            <a class="dropdown-item" href="citaciones.php">Citacion <span class="badge badge-primary badge-pill">
                            <?php echo $valido?>
                                </span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Necesitas Ayuda?</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="iniciousu.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="horasregistradas.php">Horas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="novedad.php">Novedad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vernovedad.php">Ver novedades</a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">

                    <a href="../../controlador/desconectar.php" class="btn btn-success">Salir</a>


                </form>
            </div>
        </nav>