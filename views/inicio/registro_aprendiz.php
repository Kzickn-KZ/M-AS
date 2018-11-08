
<?php
include_once'../all/head.php';
include_once'../all/header.php';
?>
<!-------CABECERA------>
  <!---------------LOGIN LOGIN LOGIN---------------->
  <center>
    <div class="box" style="width:40%;height:170%">
      <form id="form1" name="form1" method="POST" action="../../controlador/insertarusuario.php">
        <h1>REGISTRATE</h1>
        Documento
        <input name="documento" id="documento" onmouseout="oukj" required="required" type="text" placeholder="Documento"
          style="width:78%; height:10%" class="form-control"></td>
        Tipo de documento
        <select name="id_tipoDocumento" id="id_tipoDocumento" style="width:78%; height:10%" class="form-control">
          <option>Seleccione..</option>
          <?php
              //CONEXION BASE DE DATOS//
              require_once'../../modelo/Conexion.php';
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
        <input name="nombre" type="text" required="required" id="nombre" placeholder="Nombre" style="width:78%; height:10%"
          class="form-control" />
        Apellidos
        <input name="apellido" type="text" required="required" id="apellido" placeholder="Apellido" style="width:78%; height:10%"
          class="form-control" />
          Correo
          <input type="email" name="correo" required="required" id="correo" placeholder="Correo" style="width:78%; height:10%"
          class="form-control">
        Telefono
        <input name="telefono" id="telefono" type="text" placeholder="telefono" required="required" style="width:78%; height:10%"
          class="form-control">
        Contraseña
        <input name="contrasena" id="contrasena" type="password" placeholder="Contraseña" required="required" style="width:78%; height:10%"
          class="form-control">
        Sede
        <select name="id_sede" id="id_sede" style="width:78%; height:10%" class="form-control">
          <option>Seleccione..</option>
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
        <select name="id_programa" id="id_programa" style="width:78%; height:10%" class="form-control">
          <option>Seleccione..</option>
          <?php
            //CONEXION BASE DE DATOS//
        require_once "../../modelo/conexion.php";
        require_once '../../controlador/class.programa.php';
        $mysqli = new Conexion();
        $sql = Programa::imprimirprograma("WHERE estado.id_estado=1");
        while ($reg=$sql->fetch_array())
        {
        echo "<option value=\"".$reg['id_programa']."\">".$reg['nombre']."</option>";
        }
        ?>
        </select>
        Ficha
        <select name="id_ficha" id="id_ficha" style="width:78%; height:10%" class="form-control">
          <option>Seleccione..</option>
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
        <select name="id_tipoUsuario" id="id_tipoUsuario" style="width:78%; height:10%" class="form-control">
          <option>Seleccione..</option>
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