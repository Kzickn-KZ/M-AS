<script  src="../../assets/js/jquery-3.2.1.js"></script>
    <script  src="../../assets/js/jquery.validate.js"></script>
    <script>
      $(document).ready(function(){
var requerido="LLENE ESTE CAMPO";
jQuery.validator.addMethod("letras", function(value, element) {
return this.optional( element ) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test( value );
}, 'Solo se permiten letras.');
$("#for").validate({
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
                <h3><strong>AGREGAR SUPERVISORES</strong></h3>
                <em>(Agregar supervisores)</em></acronym><br><br>
                <form method="POST" action="../../controlador/insertarsupervisor.php" id="for" name="for">
                    Documento:
                    <input type="number" name="documento" id="documento" style="width:30%; height:6%" class="form-control"
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
                        required placeholder="Correo">
                    Telefono:
                    <input type="number" name="telefono" id="telefono" style="width:30%; height:6%" class="form-control"
                        required placeholder="Telefono">
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
                    <input type="submit" value="Enviar" class="btn btn-lg btn-primary btn-block btn-sm" style="width:20%">
                </form><br>

