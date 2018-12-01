<?php

include_once 'class.usuario.php';

$documento = $_POST['documento'];
$id_tipoDocumento = $_POST['id_tipoDocumento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$passsuper = $_POST['passsuper'];
$id_sede = $_POST['id_sede'];
$id_programa = 1;
$id_ficha = 1;
$id_tipoUsuario = 1;
$id_rol = 2;
$id_estado = 1;
$Usuario = new Usuario($documento, $id_tipoDocumento, $nombre, $apellido, $correo, $telefono, "","",$passsuper, $id_sede, $id_programa, $id_ficha, $id_tipoUsuario, $id_rol, $id_estado);
$Usuario->insertarsupervisor();
?>