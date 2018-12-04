<script  src="../../assets/js/jquery-3.2.1.js"></script>
    <script  src="../../assets/js/jquery.validate.js"></script>
    <script>
      $(document).ready(function(){
var requerido="LLENE ESTE CAMPO";
jQuery.validator.addMethod("letras", function(value, element) {
return this.optional( element ) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test( value );
}, 'Solo se permiten letras.');
$("#formm").validate({
rules:{
  nombre:{
    required:true,
    letras:true
  },
  apellido:{
    required:true,
    letras:true
  }
}
  ,
messages:{
  nombre:{
  required:requerido
  },
  messages:{
    apellido:{
    required:requerido
    }
  }

}


});
});
</script>
<style type="text/css">
.error{
display: block;
}
</style>
            <center><br>

                <h3><strong>TABLA ACTUALIZAR DATOS</strong></h3>
                <em>(Actualziar datos)</em></acronym>


                <?php
                include_once'../../modelo/Conexion.php';
                include_once'../../controlador/class.usuario.php';
                $admin = Usuario::imprimirusuario("WHERE id_usuario='$_SESSION[id_usuario]'");
                while($arra = $admin->fetch_array()){
                ?>


                    <form action="../../controlador/ejecutaactualizaadmin.php" method="POST" id="formm" name="formm">
                Documento:
            <input type="number" name="documento" id="documento" value="<?php echo $arra[documento]?>" style="width:30%; height:6%" class="form-control"
            required placeholder="Documento">
            Tipo Documento:
            <select id="id_tipoDocumento" name="id_tipoDocumento" value="<?php echo $arra[tipodedocumento]?>" style="width:30%; height:6%" class="form-control"
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
                <input type="text" name="nombre" id="nombre" value="<?php echo $arra[nombre]?>" style="width:30%; height:6%" class="form-control"
                required placeholder="Nombre">
                Apellido:
                <input type="text" name="apellido" id="apellido" value="<?php echo $arra[apellido]?>" style="width:30%; height:6%" class="form-control"
                required placeholder="Apellido">
                Correo:
                <input type="email" name="correo" id="correo" value="<?php echo $arra[correo]?>" style="width:30%; height:6%" class="form-control"
                required placeholder="Correo">
                Telefono:
                <input type="number" name="telefono" id="telefono" value="<?php echo $arra[telefono]?>" style="width:30%; height:6%" class="form-control"
                required placeholder="Telefono">
                Sede
                <select name="id_sede" id="id_sede" value="<?php echo $arra[sede]?>" style="width:30%; height:6%" class="form-control">
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

                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModalCenterro">Actualizar contraseña</button>
        <br><br>

                    <input type="submit" name="button" id="button" value="Enviar" class="btn btn-lg btn-primary btn-block btn-sm"
                style="width:5%" />

                    </form><br>
                <?php
                }
                ?>
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
            <form  method="POST" action="../../controlador/actualizacontrasenaadmin.php">
            Actual Contraseña:
                <input type="password" required="required" id="anteriors" name="anteriors" style="width:50%; height:8%" class="form-control">
            Nueva contraseña:
            <input type="password" required="required" id="nuevas" name="nuevas" style="width:50%; height:8%" class="form-control">
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