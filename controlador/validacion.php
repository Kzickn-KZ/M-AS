<?php
session_start();
require("../modelo/conexion.php");
require_once'class.usuario.php';
$Documento=$_POST['documento'];
$password=$_POST['contrasena'];
$db = new Conexion();
//validacion para administradores//
$sql2=Usuario::validatelogin("WHERE documento='$Documento' AND id_rol=3 and passadmin=sha1('$password')");
if($f2=mysqli_fetch_assoc($sql2))
{
$_SESSION['id_usuario']=$f2['id_usuario'];
$_SESSION['nombre']=$f2['nombre'];
$_SESSION['id_rol']=$f2['id_rol'];
$_SESSION['documento']=$f2['documento'];
$_SESSION['id_sede']=$f2['id_sede'];
$_SESSION['id_estado']=$f2['id_estado'];
$_SESSION['id_tipoUsuario']=$f2['id_tipoUsuario'];
echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
echo "<script>location.href='../views/directivo/inicio_directivo.php'</script>";
}
//validacion para supervisor//
$sql3=Usuario::validatelogin("WHERE documento='$Documento' AND id_rol=2 and passsuper=sha1('$password')");
if($f3=mysqli_fetch_assoc($sql3))
{
$_SESSION['id_usuario']=$f3['id_usuario'];
$_SESSION['nombre']=$f3['nombre'];
$_SESSION['id_rol']=$f3['id_rol'];
$_SESSION['documento']=$f3['documento'];
$_SESSION['id_sede']=$f3['id_sede'];
$_SESSION['id_estado']=$f3['id_estado'];
$_SESSION['id_tipoUsuario']=$f3['id_tipoUsuario'];
echo '<script>alert("BIENVENIDO SUPERVISOR")</script> ';
echo "<script>location.href='../views/supervisor/inicio_supervisor.php'</script>";
}
//validacion para usuarios//
$sql=Usuario::validatelogin("WHERE documento='$Documento' and id_estado=1 AND id_rol=1 and contrasena=sha1('$password')");
if($f=mysqli_fetch_assoc($sql)){//INICIO PRIMER IF//

$_SESSION['id_usuario']=$f['id_usuario'];
$_SESSION['nombre']=$f['nombre'];
$_SESSION['id_rol']=$f['id_rol'];
$_SESSION['documento']=$f['documento'];
$_SESSION['id_sede']=$f['id_sede'];
$_SESSION['id_estado']=$f['id_estado'];
$_SESSION['id_tipoUsuario']=$f['id_tipoUsuario'];
echo '<script>alert("BIENVENIDO USUARIO")</script> ';
echo "<script>location.href='../views/aprendiz/iniciousu.php'</script>";
}else{
//echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
echo "<script>location.href='../views/inicio/errorusu.php'</script>";
}//TERMINACION PRIMER IFF//
?>
