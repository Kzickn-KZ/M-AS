<div class="box" id="contenido">
            <center>

                <h3><strong>AGREGAR SUPERVISORES</strong></h3>
                <em>(Agregar supervisores)</em></acronym><br><br>

                <form method="POST" action="../../controlador/insertarusuario.php">

                    Documento:
                    <input type="text" name="documento" id="documento" style="width:30%; height:6%" class="form-control"
                        required placeholder="Documento">
                    Tipo Documento:
                    <select id="id_tipoDocumento" name="id_tipoDocumento" style="width:30%; height:6%" class="form-control"
                        required placeholder="Tipo documento">
                        <option>Selecione...</option>
                        <?php
                    require_once'../../controlador/class.tipodocumento.php';
                    require_once'../../modelo/Conexion.php';
                    $sql = Tipodocumento::imprimir("");
                        while ($reg=$sql->fetch_array())
                        {
                        echo "<option value=\"".$reg['id_tipoDocumento']."\">".$reg['nombre']."</option>";
                    }
                    ?>
                    </select>
                    Nombre:
                    <input type="text" name="nombre" id="nombre" style="width:30%; height:6%" class="form-control"
                        required placeholder="Nombre">
                    Apellido:
                    <input type="text" name="apellido" id="apellido" style="width:30%; height:6%" class="form-control"
                        required placeholder="Apellido">
                    Correo:
                    <input type="email" name="correo" id="correo" style="width:30%; height:6%" class="form-control"
                        required placeholder="Apellido">
                    Telefono:
                    <input type="text" name="telefono" id="telefono" style="width:30%; height:6%" class="form-control"
                        required placeholder="Telefono">
                    <input type="hidden" name="contrasena" id="contrasena">
                    <input type="hidden" name="passadmin" id="passadmin">
                    Contraseña:
                    <input type="password" name="passsuper" id="passsuper" style="width:30%; height:6%" class="form-control"
                        required placeholder="********">
                    Sede
                    <select name="id_sede" id="id_sede" style="width:30%; height:6%" class="form-control">
                        <option>Selecione...</option>
                        <?php
//CONEXION BASE DE DATOS//

include_once "../../controlador/class.sede.php";
require_once'../../modelo/Conexion.php';
$sql = Sede::imprimirsede("");

while ($reg=$sql->fetch_array())
{
echo "<option value=\"".$reg['id_sede']."\">".$reg['nombre']."</option>";
        }
        ?>
                    </select><br>
                    <input type="hidden" name="id_programa" id="id_programa" value="1">
                    <input type="hidden" name="id_ficha" id="id_ficha" value="1">
                    <input type="hidden" name="id_tipoUsuario" id="id_tipoUsuario" value="1">
                    <input type="hidden" name="id_rol" id="id_rol" value="2">
                    <input type="hidden" name="id_estado" id="id_estado" value="1">

                    <input type="submit" value="Enviar" class="btn btn-lg btn-primary btn-block btn-sm" style="width:20%">

                </form>

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