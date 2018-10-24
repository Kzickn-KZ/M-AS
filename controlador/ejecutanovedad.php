<?php
include_once 'class.notificar.php';
session_start();
$id_tipoNovedad = $_POST['id_tipoNovedad'];
$documento = $_SESSION['documento'];
$fecha = $fecha = date("y-m-d", time());
$descripcion = $_POST['descripcion'];
$id_usuario = $_POST['supervisor'];
$id_estado = 5;
$Novedades = new Novedades($id_tipoNovedad, $documento, $fecha, $descripcion,$id_usuario, $id_estado);
$Novedades->insertarnovedad();
?>