<!-------CABECERA------>
<?php
session_start();
include_once'cabecera.aprendiz.php';
?>
    <!---------------CONTENEDORES---------------->
<?php
include_once'contenedor.user.php';
?>
    <!--------------CONTENEDOR PRINCIPAÑ---------------->
<?php
include_once'../../controlador/aprendizController/horasregController.php';
?>
<!--------FIN HTML-------->
<?php
include_once'fin.php';
?>
