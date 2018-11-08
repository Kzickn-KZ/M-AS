<?php
session_start();
require("../modelo/conexion.php");
$Documento=$_POST['documento'];
$password=$_POST['contrasena'];
$db = new Conexion();
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
//validacion para administradores//
$sql2=mysqli_query($db,"SELECT * FROM usuario WHERE documento='$Documento'");
if($f2=mysqli_fetch_assoc($sql2))
{
if($password==$f2['passadmin'])
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
}
//validacion para supervisor//
$sql3=mysqli_query($db,"SELECT * FROM usuario WHERE documento='$Documento'");
if($f3=mysqli_fetch_assoc($sql3))
{
if($password==$f3['passsuper'])
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
}
//validacion para usuarios//
$sql=mysqli_query($db,"SELECT * FROM usuario WHERE documento='$Documento' and id_estado=1");
if($f=mysqli_fetch_assoc($sql)){//INICIO PRIMER IF//
if($password==$f['contrasena']){//INICIO SEGUNDOIFF//
$_SESSION['id_usuario']=$f['id_usuario'];
$_SESSION['nombre']=$f['nombre'];
$_SESSION['id_rol']=$f['id_rol'];
$_SESSION['documento']=$f['documento'];
$_SESSION['id_sede']=$f['id_sede'];
$_SESSION['id_estado']=$f['id_estado'];
$_SESSION['id_tipoUsuario']=$f['id_tipoUsuario'];
echo '<script>alert("BIENVENIDO USUARIO")</script> ';
echo "<script>location.href='../views/aprendiz/iniciousu.php'</script>";
}else{//FIN SEGUNDO IFF//
echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
echo "<script>location.href='../index.html'</script>";
}
}else{
//echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
echo "<script>location.href='../views/inicio/errorusu.php'</script>";
}//TERMINACION PRIMER IFF//
?>
