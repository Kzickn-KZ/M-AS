
<?php
require_once '../all/head.php';
require_once '../all/header.php';
include_once '../../modelo/conexion.php';
require_once '../../controlador/class.tipodocumento.php';
require_once '../../controlador/class.sede.php';
require_once '../../controlador/class.programa.php';
require_once '../../controlador/class.ficha.php';
require_once '../../controlador/class.Tipousuario.php';
?>


<!-------CABECERA------>
  <!---------------LOGIN LOGIN LOGIN---------------->
  <center>
    <div class="box" style="width:40%;height:170%">
      <form id="form1" name="form1" method="POST" action="../../controlador/insertarusuario.php">
        <h1>REGISTRATE</h1>
        Documento
        <input name="documento" id="documento"  required="required number" type="number" placeholder="Documento"
          style="width:78%; height:10%" class="form-control"></td>
        Tipo de documento
        <select name="id_tipoDocumento" id="id_tipoDocumento" style="width:78%; height:10%" class="form-control">
        <option>seleccione...</option>
          <?php
          $mysqli = new Conexion();
          $sql1 = Tipodocumento::imprimir("");
          while ($reg1=$sql1->fetch_array()){
          echo "<option value=\"".$reg1['id_tipoDocumento']."\">".$reg1['nombre']."</option>";}
        ?>
        </select>
        Nombre
        <input name="nombre" type="text" required="required" id="nombre" placeholder="Nombre" style="width:78%; height:10%"
          class="form-control" />
        Apellidos
        <input name="apellido" type="text" required="required" id="apellido" placeholder="Apellido" style="width:78%; height:10%"
          class="form-control" />
          Correo
          <input type="email" name="correo" required="required" id="correo" placeholder="Correo" style="width:78%; height:10%"
          class="form-control">
        Telefono
        <input name="telefono" id="telefono" type="number" placeholder="telefono" required="required" style="width:78%; height:10%"
          class="form-control">
        Contraseña
        <input name="contrasena" id="contrasena" type="password" placeholder="Contraseña" required="required" style="width:78%; height:10%"
          class="form-control">
        Sede
        <select name="id_sede" id="id_sede" style="width:78%; height:10%" class="form-control">
        <option>seleccione...</option>
          <?php
        $mysqli = new Conexion();
        $sql2 = Sede::imprimirsede("");
        while ($reg2=$sql2->fetch_array()){
        echo "<option value=\"".$reg2['id_sede']."\">".$reg2['nombre']."</option>";}
        ?>
        </select>
        Programa
        <select name="id_programa" id="id_programa" style="width:78%; height:10%" class="form-control">
        <option>seleccione...</option>
          <?php
        $mysqli = new Conexion();
        $sql3 = Programa::imprimirprograma("WHERE estado.id_estado=1");
        while ($reg3=$sql3->fetch_array()){
        echo "<option value=\"".$reg3['id_programa']."\">".$reg3['nombre']."</option>";}
        ?>
        </select>
        Ficha
        <select name="id_ficha" id="id_ficha" style="width:78%; height:10%" class="form-control">
        <option>seleccione...</option>
          <?php
        $mysqli = new Conexion();
        $sql4 = Ficha::imprimirficha("WHERE estado.id_estado=1");
        while ($reg4=$sql4->fetch_array()){
          echo "<option value=\"".$reg4['id_ficha']."\">".$reg4['nombre']."</option>";}
        ?>
        </select>
        Deseas inscribirte a:
        <select name="id_tipoUsuario" id="id_tipoUsuario" style="width:78%; height:10%" class="form-control">
        <option>seleccione...</option>
          <?php
        $mysqli = new Conexion();
        	$sql5 = Tipousuario::imprimirtipousuario("WHERE id_estado=1");
        while ($reg5=$sql5->fetch_array()){
        echo "<option value=\"".$reg5['id_tipoUsuario']."\">".$reg5['nombre']."</option>";}
        ?>
        </select><br>
        <p>
          <input type="submit" name="button" id="button" value="Enviar" class="btn btn-lg btn-primary btn-block btn-sm"
            style="width:40%" />
          <br>
          <a href="../../index.php" <button class="btn btn-lg btn-primary btn-block btn-sm" type="button" style="width:40%">Volver</button></a>
          <br>
        </p>
      </form>
  </center>
  <!---------------LOGIN LOGIN LOGIN---------------->
  <?php
include_once'../all/footer.php';
?>
<script  src="../../assets/js/jquery-3.2.1.js"></script>
    <script  src="../../assets/js/jquery.validate.js"></script>
    <script>
      $(document).ready(function(){
var requerido="LLENE ESTE CAMPO";
jQuery.validator.addMethod("letras", function(value, element) {
return this.optional( element ) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test( value );
}, 'Solo se permiten letras.');
$("#form1").validate({
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