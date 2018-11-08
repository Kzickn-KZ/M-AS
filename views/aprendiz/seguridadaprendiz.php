<?php
    session_start();
    if(@!$_SESSION['id_usuario']){
        header("Location: ../../index.php");
    }elseif($_SESSION['id_rol']==2){
        header("Location:../../index.php");
    }elseif($_SESSION['id_rol']==3){
        header("Location:../../index.php");
    }
?>