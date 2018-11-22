<script  src="../../assets/js/jquery-3.2.1.js"></script>
    <script  src="../../assets/js/jquery.validate.js"></script>
    <script>
      $(document).ready(function(){
var requerido="LLENE ESTE CAMPO";
jQuery.validator.addMethod("letras", function(value, element) {
return this.optional( element ) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test( value );
}, 'Solo se permiten letras.');
$("#form2").validate({
rules:{
  nombre:{
    required:true,
    letras:true
  },
  descripcion:{
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
    descripcion:{
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
                <h3><strong>PROYECTO</strong></h3>
                <em>(Llenar datos de proyecto a realizar)</em></acronym><br><br>
<?php
include_once '../../modelo/Conexion.php';
include_once '../../controlador/class.proyecto.php';
$db = New Conexion();
//CONSULTA DE NOMBRE Y ESTADO
$nomproyecto = Proyecto::nomest("WHERE documento='$_SESSION[documento]'");
while($row=mysqli_fetch_assoc($nomproyecto)){
    $nom = $row['nombre'];
    $est = $row['estadoo'];
}
?>
<?php
//CONSULTA DE SABER SI YA LO TIENE REGISTRADO
$chek = Proyecto::printrow("WHERE documento='$_SESSION[documento]' and id_estado=1");
        $hoy = date("Y-m-d");
		if ($chek->num_rows >= 1) {
            echo "<p><h3>USTED YA TIENE UN PROYECTO LLAMADO: <br> <p>".$nom."</p>EN ESTADO DE ACTIVO, SI NO APARECE ESTE ANUNCIO LA PROXIMA VEZ ES POR QUE EL SUPERVISOR SE LO HA DESACTIVADO Y TENDRA QUE INSERTAR OTRO<br> <BR>GRACIAS.</h3></p>";
		}else{
            echo '
            <form method="post" action="../../controlador/ejecutaproyecto.php" id="form2" name="form2">
                    Fecha de inicio:
                    <input type="date" name="fechainicio" id="fechainicio" min="'.$hoy.'" style="width:45%; height:8%" class="form-control"
                        required value="'.$hoy.'"><br>
                    Fecha de terminacion:
                    <input type="date" name="fechafinal" id="fechafinal" style="width:45%; height:8%" class="form-control"
                        required ><br>
                    Nombre del proyecto:
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre Proyecto" style="width:45%; height:8%" class="form-control"
                        required><br>
                    Descripcion:
                    <textarea type="text" name="descripcion" id="descripcion" placeholder="Descripcion" style="width:45%; height:8%" class="form-control" required></textarea><br>
                    Supervisor a cargo:
                    <select name="supervisor" id="supervisor" style="width:45%; height:8%" class="form-control"
                        required>
                        <option>seleccione...</option>
                        ';
                //CONEXION BASE DE DATOS//
        require_once "../../controlador/class.usuario.php";
        $sql = Usuario::imprimirusuario("WHERE rol.id_rol=2");
        while ($reg=mysqli_fetch_array($sql))
        {
        echo "<option value=\"".$reg['id_usuario']."\">".$reg['nombre']."</option>";
        }
        echo '
                    </select><br>
                    <button class="btn btn-lg btn-primary btn-block btn-sm" type="submit" class="botonlg" style="width:180px">Enviar</button><br>
                </form>
            ';
        }
?>
                <!---FIN TEXTO--->
