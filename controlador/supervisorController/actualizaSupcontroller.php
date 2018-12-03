<div class="box" id="contenido">
            <center><br>
            <h3><strong>TABLA ACTUALIZAR DATOS</strong></h3>
            <em>(Podras actualizar tus datos)</em></acronym>

            <?php
            include_once "../../modelo/conexion.php";
            include_once "../../controlador/class.usuario.php";
            $gg = Usuario::imprimirusuario("WHERE id_usuario='$_SESSION[id_usuario]'");
            while($res = $gg->fetch_array()){
            ?>

                <form action="../../controlador/ejecutaactualizaSupp.php" method="POST">
            Documento:
            <input type="text" name="documento" id="documento" value="<?php echo $res[documento]?>" style="width:30%; height:6%" class="form-control"
            required placeholder="Documento">
            Tipo Documento:
            <select id="id_tipoDocumento" name="id_tipoDocumento" value="<?php echo $res[tipodedocumento]?>" style="width:30%; height:6%" class="form-control"
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
                <input type="text" name="nombre" id="nombre" value="<?php echo $res[nombre]?>" style="width:30%; height:6%" class="form-control"
                required placeholder="Nombre">
                Apellido:
                <input type="text" name="apellido" id="apellido" value="<?php echo $res[apellido]?>" style="width:30%; height:6%" class="form-control"
                required placeholder="Apellido">
                Correo:
                <input type="email" name="correo" id="correo" value="<?php echo $res[correo]?>" style="width:30%; height:6%" class="form-control"
                required placeholder="Correo">
                Telefono:
                <input type="text" name="telefono" id="telefono" value="<?php echo $res[telefono]?>" style="width:30%; height:6%" class="form-control"
                required placeholder="Telefono">
                Contraseña:
                <input type="password" name="passsuper" id="passsuper" value="<?php echo $res[passsuper]?>" style="width:30%; height:6%" class="form-control"
                required placeholder="********">
                Sede
                <select name="id_sede" id="id_sede" value="<?php echo $res[sede]?>" style="width:30%; height:6%" class="form-control">
                <option>Selecione...</option>
                <?php
                    include_once "../../controlador/class.sede.php";
                    require_once'../../modelo/Conexion.php';
                    $sql = Sede::imprimirsede("");
                    while ($reg=$sql->fetch_array())
                        {
                    echo "<option value=\"".$reg['id_sede']."\">".$reg['nombre']."</option>";
                    }
                    ?>
                    </select><br>
                <?php
                }
                ?>
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModalCenterro">Actualizar contraseña</button>
        <br><br>
                <input type="submit" name="button" id="button" value="Enviar" class="btn btn-lg btn-primary btn-block btn-sm"
                style="width:5%" />

                    </form>
            <br>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenterro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Cambiar contraseña</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form  method="POST" action="../../controlador/actualizacontrasenasupp.php">
            Actual Contraseña:
                <input type="password" required="required" id="anteriorr" name="anteriorr" style="width:50%; height:8%" class="form-control">
            Nueva contraseña:
            <input type="password" required="required" id="nuevaa" name="nuevaa" style="width:50%; height:8%" class="form-control">
            <br>
            <input type="submit" name="" value="Enviar" class="btn btn-lg btn-primary btn-block btn-sm" style="width:15%">
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
