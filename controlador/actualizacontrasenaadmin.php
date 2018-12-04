<?php
session_start();
include_once'class.usuario.php';
include_once'../modelo/Conexion.php';

$anteriorr = sha1($_POST['anteriors']);
$nuevas = $_POST['nuevas'];
$nuevas2 = $_POST['nuevas2'];
$users = $_SESSION['id_usuario'];

$dd=usuario::valcontrasena("WHERE id_usuario='$_SESSION[id_usuario]'");
$gg=$dd->fetch_array();
$contra=$gg['passadmin'];

if($nuevas!=$nuevas2){
    echo '<script language="javascript">alert("TU CONTRASEÑA NUEVA NO COINCIDE");';
    echo 'location.href="../views/directivo/updateadmin.php"</script>';
}else{
if($anteriorr == $contra){
    usuario::actualizacontraadmin($nuevas,$users);
}else{
echo'<script language="javascript">alert("LAS CONTRASEÑAS NO COINCIDEN");location.href="../views/directivo/updateadmin.php"</script>';
}


}



?>