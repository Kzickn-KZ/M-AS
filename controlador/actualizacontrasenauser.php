<?php
session_start();
include_once'class.usuario.php';
include_once'../modelo/Conexion.php';

$anterior = $_POST['anterior'];
$nueva = $_POST['nueva'];
$user = $_SESSION['id_usuario'];

$dd=usuario::valcontrasena("WHERE id_usuario='$_SESSION[id_usuario]'");
$gg=$dd->fetch_array();
$contra=$gg['contrasena'];

if($anterior == $contra){
    usuario::actualizacontra($nueva,$user);
}else{
echo'<script language="javascript">alert("LAS CONTRASEÑAS NO COINCIDEN");location.href="../views/aprendiz/updateuser.php"</script>';
}



?>