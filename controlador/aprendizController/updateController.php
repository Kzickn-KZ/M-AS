<script  src="../../assets/js/jquery-3.2.1.js"></script>
    <script  src="../../assets/js/jquery.validate.js"></script>
    <script>
      $(document).ready(function(){
var requerido="LLENE ESTE CAMPO";
jQuery.validator.addMethod("letras", function(value, element) {
return this.optional( element ) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test( value );
}, 'Solo se permiten letras.');
$("#form3").validate({
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
    <!----------------AQUI VA TEXTO DE INICIO CON CALENDARIO-------------->
    <h3><strong>ACTUALIZACION DE DATOS</strong></h3>
    <em>(Actualizar los datos, recuerde diligenciar bien)</em></acronym><br>


    <?php
        include_once'../../controlador/class.usuario.php';
        include_once'../../modelo/Conexion.php';
        $sql_updater = Usuario::imprimirusuario("WHERE id_usuario='$_SESSION[id_usuario]'");
        while($regee=$sql_updater->fetch_assoc()){
        ?>


    <form action="../../controlador/ejecutaupdateuser.php" method="POST" id="form3" name="form3">
        Documento
        <input name="documento" id="documento" value="<?php echo $regee[documento]?>" required="required" type="number"
            placeholder="Documento" style="width:30%; height:8%" class="form-control"></td>
        Tipo de documento
        <select name="id_tipoDocumento" id="id_tipoDocumento" style="width:30%; height:8%" class="form-control">
        <option>seleccione...</option>
            <?php
                //CONEXION BASE DE DATOS//
                require_once "../../controlador/class.tipodocumento.php";
                $mysqli = new Conexion();
                $sql = Tipodocumento::imprimir("");
                while ($regr=$sql->fetch_array()){
                echo "<option value=\"".$regr['id_tipoDocumento']."\">".$regr['nombre']."</option>";
                }
                ?>
        </select>
        Nombre
        <input name="nombre" type="text" value="<?php echo $regee[nombre]?>" required="required" id="nombre"
            placeholder="Nombre" style="width:30%; height:8%" class="form-control" />
        Apellidos
        <input name="apellido" type="text" value="<?php echo $regee[apellido]?>" required="required" id="apellido"
            placeholder="Apellido" style="width:30%; height:8%" class="form-control" />
        Correo
        <input type="email" name="correo" value="<?php echo $regee[correo]?>" required="required" id="correo"
            placeholder="Correo" style="width:30%; height:8%" class="form-control">
        Telefono
        <input name="telefono" id="telefono" value="<?php echo $regee[telefono]?>" type="number" placeholder="telefono"
            required="required" style="width:30%; height:8%" class="form-control">
        Sede
        <select name="id_sede" id="id_sede" style="width:30%; height:8%" class="form-control">
        <option>seleccione...</option>
            <?php
                //CONEXION BASE DE DATOS//
                require_once "../../modelo/conexion.php";
                include_once "../../controlador/class.sede.php";
                $mysqli = new Conexion();
                $sql = Sede::imprimirsede("");
                while ($reg=$sql->fetch_array())
                {
                echo "<option value=\"".$reg['id_sede']."\">".$reg['nombre']."</option>";
                }
                ?>
        </select><br>
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModalCenterr">Actualizar contraseña</button>
        <br><br>

        <input type="submit" name="button" id="button" value="Enviar" class="btn btn-lg btn-primary btn-block btn-sm"
            style="width:10%"><br>
    </form>


    <?php
        }
        ?>
        <!-- Modal -->
<div class="modal fade" id="exampleModalCenterr" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
            <form  method="POST" action="../../controlador/actualizacontrasenauser.php">
            Actual Contraseña:
                <input type="password" required="required" id="anterior" name="anterior" style="width:50%; height:8%" class="form-control">
            Nueva contraseña:
            <input type="password" required="required" id="nueva" name="nueva" style="width:50%; height:8%" class="form-control">
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

    <!---FIN TEXTO--->