<?php
    session_start();
    if(@!$_SESSION['nombre']){
        header("Location: inicio_supervisor.php");
    }elseif($_SESSION['id_rol']==3){
        header("Location: ../../index.html");
    }elseif($_SESSION['id_rol']==1){
        header("Location: ../../index.html");
    }
?>