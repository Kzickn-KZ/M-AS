<?php

include_once 'class.citacion.php';

session_start();
$id_usuario = $_POST['id_usuario'];
$citador = $_SESSION['documento'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$id_sede = $_POST['id_sede'];
$ambiente = $_POST['ambiente'];
$Citacion = new Citacion($id_usuario,$citador, $fecha, $hora, $id_sede, $ambiente);
$Citacion->insertarcitacion();

?>