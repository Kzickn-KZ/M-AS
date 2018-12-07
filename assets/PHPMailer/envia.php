<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require '../../controlador/class.usuario.php';
require '../../modelo/Conexion.php';

$email = $_POST['email'];

$s = Usuario::envioEmail($email);
while($r = $s->fetch_assoc()){
    $id = $r['id_usuario'];
    $nombre = $r['nombre'];
    $correo = $r['correo'];
    $contra = $r['contrasena'];
    $contra2 = $r['passsuper'];
    $contra3 = $r['passadmin'];
}

$url = 'http://'.$_SERVER["SERVER_NAME"].':8081/M-ASS/M-AS/views/inicio/cambiocontra.php?codigo='.$id.'';


if($email == $correo){
    /////////
    $mail = new PHPMailer(true);
try {

$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'kzickn@gmail.com';
$mail->Password = '93202231*/';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->CharSet = 'UTF-8';
$mail->setFrom('kzickn@gmail.com', 'SENA-MONITORIAS Y APOYO DE SOSTENIMIENTO');
$mail->addAddress($correo, 'para mi');

$mail->isHTML(true);
$mail->Subject = 'Recordar contraseña';
$mail->Body    = "Señor usuario para cambiar su contraseña haga click en el siguiente botton <a href='$url'><button>Recuperar contraseña</button></a>";

$mail->send();
echo '<script language="javascript">alert("MENSAJE ENVIADO");location.href="../../index.php"</script>';
} catch (Exception $e) {
echo 'No se ha enviado: ', $mail->ErrorInfo;
}
    /////////
}else{
    echo '<script language="javascript">alert("ESE CORREO NO EXISTE");location.href="../../index.php"</script>';
}














?>