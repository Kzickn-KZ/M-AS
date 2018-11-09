<?php
    session_start();
    if(@!$_SESSION['nombre']){
        header("Location: inicio_directivo.php");
    }elseif($_SESSION['id_rol']==1){
        header("Location:../../controlador/desconectar.php");
    }elseif($_SESSION['id_rol']==2){
        header("Location:../../controlador/desconectar.php");
    }
?>