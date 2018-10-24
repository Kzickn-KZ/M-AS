<?php
include_once 'class.proyecto.php';
include_once '../modelo/conexion.php';
session_start();
$documento = $_SESSION['documento'];
$fechainicio = $_POST['fechainicio'];
$fechafinal = $_POST['fechafinal'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$id_usuario = $_POST['supervisor'];
$id_estado = 1;
$Proyecto = new Proyecto($documento,$fechainicio,$fechafinal,$nombre,$descripcion,$id_usuario,$id_estado);
$Proyecto->insertarproyecto();
?>