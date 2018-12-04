<?php
session_start();
include_once'class.usuario.php';
include_once'../modelo/Conexion.php';

$anteriorr = sha1($_POST['anteriorr']);
$nuevaa = $_POST['nuevaa'];
$nuevaa2 = $_POST['nuevaa2'];
$user = $_SESSION['id_usuario'];

$dd=usuario::valcontrasena("WHERE id_usuario='$_SESSION[id_usuario]'");
$gg=$dd->fetch_array();
$contra=$gg['passsuper'];

if($nuevaa!=$nuevaa2){
    echo '<script language="javascript">alert("LAS CONTRASEÑAS NUEVAS NO COINCIDEN");';
    echo 'location.href="../views/supervisor/actualizarsupp.php"</script>';
}else{

if($anteriorr == $contra){
    usuario::actualizacontrasupp($nuevaa,$user);
}else{
echo'<script language="javascript">alert("LAS CONTRASEÑAS NO COINCIDEN");location.href="../views/supervisor/actualizarsupp.php"</script>';
}


}





?>