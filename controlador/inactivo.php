<?php
include_once 'class.proyecto.php';
extract($_GET);
        if(@$codigohabilitar==2){
        $id=$_REQUEST['codigo'];
        proyecto::cambiarestado(2, $id);
        }
?>