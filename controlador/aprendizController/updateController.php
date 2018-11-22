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
                while ($reg=$sql->fetch_array())
                {
                echo "<option value=\"".$reg['id_tipoDocumento']."\">".$reg['nombre']."</option>";
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
        Contraseña
        <input name="contrasena" id="contrasena" type="password" value="<?php echo $regee[contrasena]?>" placeholder="Contraseña"
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
        </select>
        Programa
        <select name="id_programa" id="id_programa" style="width:30%; height:8%" class="form-control">
        <option>seleccione...</option>
            <?php
                //CONEXION BASE DE DATOS//
                require_once "../../modelo/conexion.php";
                require_once '../../controlador/class.programa.php';
                $mysqli = new Conexion();
                $sql = Programa::imprimirprograma("");
                while ($reg=$sql->fetch_array())
                {
                echo "<option value=\"".$reg['id_programa']."\">".$reg['nombre']."</option>";
                }
                ?>
        </select>
        Ficha
        <select name="id_ficha" id="id_ficha" style="width:30%; height:8%" class="form-control">
        <option>seleccione...</option>
            <?php
                //CONEXION BASE DE DATOS//
                require_once "../../modelo/conexion.php";
                include_once '../../controlador/class.ficha.php';
                $mysqli = new Conexion();
                $sql = Ficha::imprimirficha("WHERE estado.id_estado=1");
                while ($reg=$sql->fetch_array())
                {
                echo "<option value=\"".$reg['id_ficha']."\">".$reg['nombre']."</option>";
                }
                ?>
        </select>
        Deseas inscribirte a:
        <select name="id_tipoUsuario" id="id_tipoUsuario" style="width:30%; height:8%" class="form-control">
        <option>seleccione...</option>
            <?php
                //CONEXION BASE DE DATOS//
                require_once "../../modelo/conexion.php";
                include_once'../../controlador/class.Tipousuario.php';
                $mysqli = new Conexion();
        	    $sql = Tipousuario::imprimirtipousuario("WHERE id_estado=1");
                while ($reg=$sql->fetch_array())
                {
                echo "<option value=\"".$reg['id_tipoUsuario']."\">".$reg['nombre']."</option>";
                }
                ?>
        </select><br>

        <input type="submit" name="button" id="button" value="Enviar" class="btn btn-lg btn-primary btn-block btn-sm"
            style="width:10%"><br>
    </form>


    <?php
        }
        ?>

    <!---FIN TEXTO--->