<?php
include_once'class.usuario.php';

$codigo = $_POST['codigo'];
$contra1 = sha1($_POST['contra1']);
$contra2 = sha1($_POST['contra2']);

if(isset($_POST['submit'])){

if($contra1 != $contra2){
    echo '<script language="javascript">alert("LAS CONTRASEÑAS NO COINCIDEN");location.href="../index.php"</script>';
}else{
usuario::recuperarcontrasena($contra1,$codigo);
}
}

?>