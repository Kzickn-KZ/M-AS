<?php
session_start();
include_once'class.usuario.php';
include_once'../modelo/Conexion.php';

$documento = $_POST['documento'];
$id_tipoDocumento = $_POST['id_tipoDocumento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$id_sede = $_POST['id_sede'];
$id_usuario= $_SESSION['id_usuario'];

Usuario::updateuser($documento,$id_tipoDocumento,$nombre,$apellido,$correo,$telefono,$id_sede,$id_usuario);

?>