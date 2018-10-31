<?php
    session_start();
    if(@!$_SESSION['nombre']){
        header("Location: iniciousu.php");
    }elseif($_SESSION['id_rol']==2){
        header("Location:../../index.html");
    }elseif($_SESSION['id_rol']==3){
        header("Location:../../index.html");
    }
?>