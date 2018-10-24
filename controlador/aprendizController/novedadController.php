<div class="box" id="contenido">
            <center>
                <!----------------AQUI VA TEXTO DE INICIO CON CALENDARIO-------------->
                <h3><strong>NOTIFICACIONES</strong></h3>
                <em>(Aca usted podra llenar este formulario por si se le presenta alguna novedad dependiendo el tipo de
                    novedad que escoja)<br></em>
                <form action="../../controlador/ejecutanovedad.php" method="POST"><br>
                    <b>Seleccione el tipo de novedad</b>
                    <select name="id_tipoNovedad" id="id_tipoNovedad" style="width:400px; height:40px" class="form-control"
                        required>
                        <option>Seleccione ...</option>
                        <?php
            //CONEXION BASE DE DATOS//
                require_once "../../modelo/conexion.php";
                require_once '../../controlador/class.Tiponovedad.php';
                    $mysqli = new Conexion();
                    $sql = Tiponovedad::imprimirnovedad("");
                        while ($reg=$sql->fetch_array())
                        {
                    echo "<option value=\"".$reg['id_tipoNovedad']."\">".$reg['nombre']."</option>";
                        }
                ?>
                    </select><br>
                    <b>Descripcion clara de la novedad</b>
                    <textarea name="descripcion" id="descripcion" rows="10" cols="40" style="width:400px; height:100px"
                        class="form-control" required></textarea><br>
                    <b>Supervisor:</b>
                    <select name="supervisor" id="supervisor" style="width:400px; height:40px" class="form-control"
                        required>
                        <option>Seleccione ...</option>
                        <?php
                //CONEXION BASE DE DATOS//
        require_once "../../modelo/conexion.php";
        require_once '../../controlador/class.usuario.php';
        $sql = Usuario::imprimirusuario("WHERE rol.id_rol=2");
        while ($reg=mysqli_fetch_array($sql))
        {
        echo "<option value=\"".$reg['id_usuario']."\">".$reg['nombre']."</option>";
        }
        ?>
                    </select><br>
                    <button class="btn btn-lg btn-primary btn-block btn-sm" type="submit" class="botonlg" style="width:180px">Enviar</button><br>
                    <em>(Al enviar esta informacion no tiene posibilidad de editarla o cancelarla,
                        por favor diligenciar bien los datos)</em>
                </form>
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