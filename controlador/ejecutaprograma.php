<?php

include_once'class.programa.php';

$nombre = $_POST['nombre'];
$id_estado = 1;

$Programa = new Programa($nombre, $id_estado);
$Programa->insertarPrograma();

?>