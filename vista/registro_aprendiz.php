<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Manejo de monitorias y apoyo de sostenimiento para aprendices de el sena que quieran aplicar">

  <title> M&AS </title>
<!---------------LOGIN LOGIN LOGIN---------------->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/estile.css" rel="stylesheet">
  <link href="../css/business-casual.css" rel="stylesheet">
  <link rel="shortcut icon" href="../img/icono.png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
    rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic"
    rel="stylesheet" type="text/css">
</head>
<body>
  <br>
  <br>
  <div id="grande">
    <center>
      <div><img src="../img/inicio.png" width="800px" height="150px"></div><br>
  </div>
  <!---------------LOGIN LOGIN LOGIN---------------->
  <center>
    <div class="box" style="width:40%;height:170%">
      <form id="form1" name="form1" method="POST" action="../controlador/insertarusuario.php">
        <h1>REGISTRATE</h1>
        Documento
        <input name="documento" id="documento" onmouseout="oukj" required="required" type="text" placeholder="Documento"
          style="width:78%; height:10%" class="form-control"></td>
        Tipo de documento
        <select name="id_tipoDocumento" id="id_tipoDocumento" style="width:78%; height:10%" class="form-control">
          <option>Seleccione..</option>
          <?php
              //CONEXION BASE DE DATOS//
          require_once "../controlador/class.tipodocumento.php";
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
        require_once "../modelo/conexion.php";
        include_once "../controlador/class.sede.php";
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
        require_once "../modelo/conexion.php";
        require_once '../controlador/class.programa.php';
        $mysqli = new Conexion();
        $sql = Programa::imprimirprograma("");
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
        require_once "../modelo/conexion.php";
        include_once '../controlador/class.ficha.php';
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
        require_once "../modelo/conexion.php";
        include_once'../controlador/class.Tipousuario.php';
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
          <a href="../index.html" <button class="btn btn-lg btn-primary btn-block btn-sm" type="button" style="width:40%">Volver</button></a>
          <br>
        </p>
      </form>
  </center>
  <!---------------LOGIN LOGIN LOGIN---------------->
  <br>
  <div class="row-fluid">
    <div class="span8">
    </div>
  </div>
  </center>
  </div>
  </div>
  </div>
  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <p>Monitorias & Apoyo de sostenimiento</p>
          (proyecto realizado por aprendices SENA)<br>
          Jose Luis Avila Paramo, Edwin Aguilar Giron
        </div>
      </div>
    </div>
  </footer>
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  </center>
  <div class="row-fluid">
    <div class="span8">
    </div>
  </div>
</body>
</html>