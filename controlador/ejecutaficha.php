<?php
include_once 'class.ficha.php';
$nombre = $_POST['ficha'];
$id_programa = $_POST['programa'];
$id_estado = 1;
$Ficha = new Ficha($nombre,$id_programa,$id_estado);
$Ficha->insertarficha();
?>