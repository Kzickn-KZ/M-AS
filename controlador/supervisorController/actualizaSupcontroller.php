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
                    <input type="hidden" name="id_programa" id="id_programa" value="1">
                    <input type="hidden" name="id_ficha" id="id_ficha" value="1">
                    <input type="hidden" name="id_tipoUsuario" id="id_tipoUsuario" value="1">


                <?php
                }
                ?>
                <input type="submit" name="button" id="button" value="Enviar" class="btn btn-lg btn-primary btn-block btn-sm"
                style="width:5%" />

                    </form>
            </center>
            <br>
