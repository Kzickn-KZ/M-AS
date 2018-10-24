<div class="box" id="contenido">
            <center>
                <!----------------AQUI VA TEXTO DE INICIO CON CALENDARIO-------------->
                <h3><strong>PROYECTO</strong></h3>
                <em>(Llenar datos de proyecto a realizar)</em></acronym><br><br>
<?php
include_once '../../modelo/Conexion.php';
include_once '../../controlador/class.proyecto.php';
$db = New Conexion();
//CONSULTA DE NOMBRE Y ESTADO
$nomproyecto = Proyecto::nomest("WHERE documento='$_SESSION[documento]'");
while($row=mysqli_fetch_assoc($nomproyecto)){
    $nom = $row['nombre'];
    $est = $row['estadoo'];
}
?>
<?php
//CONSULTA DE SABER SI YA LO TIENE REGISTRADO
$chek = Proyecto::printrow("WHERE documento='$_SESSION[documento]' and id_estado=1 ");
		if ($chek->num_rows >= 1) {
            echo "<br>";
            echo "<br>";
            echo "<p><h3>USTED YA TIENE UN PROYECTO LLAMADO: ".$nom." <br>CON UN ESTADO DE: ".$est." <br>SI EL ADMINISTRADOR SE LO CANCELA TENDRA QUE INSERTAR OTRO,<br> SI ESTA EN ACTIVO
            ES POR QUE USTED ESTA EN DESARROLLO DE:  ".$nom."<BR><BR>GRACIAS.</h3></p>";
		}else{
            echo '
            <form method="post" action="../../controlador/ejecutaproyecto.php">
                    Fecha de inicio:
                    <input type="date" name="fechainicio" id="fechainicio" style="width:400px; height:40px" class="form-control"
                        required><br>
                    Fecha de terminacion:
                    <input type="date" name="fechafinal" id="fechafinal" style="width:400px; height:40px" class="form-control"
                        required><br>
                    Nombre del proyecto:
                    <input type="text" name="nombre" id="nombre" style="width:400px; height:40px" class="form-control"
                        required><br>
                    Descripcion:
                    <textarea name="descripcion" id="descripcion" rows="10" cols="40" style="width:400px; height:50px"
                        class="form-control" required></textarea><br>
                    Supervisor a cargo:
                    <select name="supervisor" id="supervisor" style="width:400px; height:40px" class="form-control"
                        required>
                        ';
                //CONEXION BASE DE DATOS//
        require_once "../../controlador/class.usuario.php";
        $sql = Usuario::imprimirusuario("WHERE rol.id_rol=2");
        while ($reg=mysqli_fetch_array($sql))
        {
        echo "<option value=\"".$reg['id_usuario']."\">".$reg['nombre']."</option>";
        }
        echo '
                    </select><br>
                    <button class="btn btn-lg btn-primary btn-block btn-sm" type="submit" class="botonlg" style="width:180px">Enviar</button><br>
                </form>
            ';
        }
?>
                <!---FIN TEXTO--->
            </center>
            <br>
            <br>
            <div class="row-f luid">
                <div class="span8">
                </div>
            </div>
            <br />
    </center>
    </div>
    </center>