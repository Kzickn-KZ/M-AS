<?php
include_once 'class.horas.php';
session_start();
$documento = $_SESSION['documento'];
$fecha = date("y-m-d", time());
$horas_realizadas = $_POST['hora'];
$descripcion = $_POST['descripcion'];
$id_usuario = $_POST['supervisor'];
$id_estado = 5;
$tok = 0;
$Horas = new Horas($documento,$fecha,$horas_realizadas,$descripcion,$id_usuario,$id_estado,$tok);
$Horas->insertarhoras();
?>