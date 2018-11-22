<?php
//CODIGO PARA ERROR QUE SALE EN LA CONEXION//PERO AL QUITARLA NO SERVIRIA NADA//
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);


session_start();
if($_SESSION['nombre']){
	session_destroy();
	header("location:../index.php");
}
?>