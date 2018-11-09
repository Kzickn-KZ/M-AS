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
                    <a class="dropdown-item" href="proyectoadmin.php">Proyecto</a>
                    <a class="dropdown-item" href="updateadmin.php">Actualizar Datos</a>
                    <a class="dropdown-item" href="agregarsup.php">Agregar Supervisor</a>
                    <a class="dropdown-item" href="agregarficha.php">Fichas</a>
                    <a class="dropdown-item" href="agregarprograma.php">Programas</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Necesitas Ayuda?</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="inicio_directivo.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="consultar_aprendiz.php">Citar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Aprendicess.php">Aprendices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tablacitaciones.php">Tabla Citaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="horasadmin.php">Horas Aprendices</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <div class="none">
                <button type="button" class="btn btn-warning"
                        data-toggle="modal" data-target="#exampleModalCenter">Reiniciar horas</button>
            </div>
            <a href="../../controlador/desconectar.php" class="btn btn-success">Salir</a>
        </form>
    </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">AVISO!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Estas seguro que quieres reiniciar las horas de todos los aprendices?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="../../controlador/prueba.php?reinicio=2"><button type="button" class="btn btn-primary">Aceptar</button></a>
            </div>
        </div>
    </div>
</div>