<?php
include_once 'class.ficha.php';
$nombre = $_POST['ficha'];
$id_estado = 1;
$Ficha = new Ficha($nombre, $id_estado);
$Ficha->insertarficha();
?>