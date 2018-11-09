<?php
    session_start();
    if(@!$_SESSION['nombre']){
        header("Location: inicio_supervisor.php");
    }elseif($_SESSION['id_rol']==3){
        header("Location:../../controlador/desconectar.php");
    }elseif($_SESSION['id_rol']==1){
        header("Location:../../controlador/desconectar.php");
    }
?>