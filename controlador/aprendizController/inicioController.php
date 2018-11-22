<script  src="../../assets/js/jquery-3.2.1.js"></script>
    <script  src="../../assets/js/jquery.validate.js"></script>
    <script>
      $(document).ready(function(){
var requerido="LLENE ESTE CAMPO";
jQuery.validator.addMethod("letras", function(value, element) {
return this.optional( element ) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test( value );
}, 'Solo se permiten letras.');
$("#form4").validate({
rules:{
    descripcion:{
    required:true,
    letras:true
  }
}
  ,
messages:{
    descripcion:{
  required:requerido
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
<h3><strong>FORMULARIO PARA REGISTRAR HORAS HECHAS EN EL DIA</strong></h3>
        <em>(recuerde llenar el formulario el mismo dia, ya que no tendra podibilidad de llenarlo al dia
            siguiente)</em></acronym><br>
            <form method="POST" action="../../controlador/ejecutahoras.php" id="form4" name="form4"><br>
                <strong>HORAS REALIZADAS:</strong>
                <select name="hora" id="hora" style="width:35%; height:5%" class="form-control" required>
                    <option>seleccione...</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                </select><br>
                    <strong>DESCRIPCION:</strong>
                    <textarea type="text" name="descripcion" id="descripcion" style="width:35%; height:5%" class="form-control" required></textarea><br>
                    <strong>Seleccione instructor a cargo: </strong>
                    <select name="supervisor" id="supervisor" style="width:35%; height:5%" class="form-control"
                        required>
                        <option>seleccione...</option>
                        <?php
                //CONEXION BASE DE DATOS//
        require_once "../../modelo/Conexion.php";
        require_once '../../controlador/class.usuario.php';
        $mysqli = new Conexion();
        $sql = Usuario::imprimirusuario("WHERE rol.id_rol=2");
        while ($reg=mysqli_fetch_array($sql))
        {
        echo "<option value=\"".$reg['id_usuario']."\">".$reg['nombre']."</option>";
        }
        ?>
                    </select><br>
                    <button class="btn btn-lg btn-primary btn-block btn-sm" type="submit" class="botonlg" style="width:15%">Enviar</button><br>
                    <em>(Al enviar esta informacion no tiene posibilidad de editarla o cancelarla,
                        por favor diligenciar bien los datos)</em>
                </form>
                <!---FIN TEXTO--->
            </center>
            <br>