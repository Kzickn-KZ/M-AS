<div class="box" id="contenido">
            <center><br>
                <h3><strong>FORMULARIO PARA CITAR APRENDICES</strong></h3>
                <em>(llenar el formulario con las especificaiones para la citacion)</em></acronym><br>
                <form method="POST" action="../../controlador/agregarcitacion.php"><br>
                    <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $_GET['id'] ?>">
                    Fecha: <br>
                    <input type="date" name="fecha" placeholder="fecha" id="fecha" style="width:400px; height:40px" class="form-control">
                    <br>
                    Hora: <br>
                    <input type="time" name="hora" id="hora" style="width:400px; height:40px" class="form-control">
                    <br>
                    Seleccione Sede:
                    <select name="id_sede" id="id_sede" style="width:400px; height:40px" class="form-control">
                        <?php
            //CONEXION BASE DE DATOS//
        require_once "../../modelo/conexion.php";
        require_once '../../controlador/class.sede.php';
        $mysqli = new Conexion();
        $sql = Sede::imprimirsede("");
        while ($reg=$sql->fetch_array())
        {
        echo "<option value=\"".$reg['id_sede']."\">".$reg['nombre']."</option>";
        }
        ?>
        </select>
        <br>
        Digite Un Ambiente: <br>
                    <input type="text" name="ambiente" placeholder="ejem: 205" id="ambiente" style="width:400px; height:40px" class="form-control"><br><br>
                    <button class="btn btn-lg btn-primary btn-block btn-sm" type="submit" class="botonlg" style="width:180px">Enviar</button><br>
                </form>
            </center>
            <br>
