<?php
$id = $_GET['codigo'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Manejo de monitorias y apoyo de sostenimiento para aprendices de el sena que quieran aplicar">
    <title> M&AS </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../assets/img/icono.png">
    <script src="../../vendor/components/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/atras.js"></script>
</head>
<div class="container bg-light justify-content-center">
        <img src="../../assets/img/inicio.png" class="img-fluid mb-5" style="width:100%" alt="Responsive image">
            <!---------------RECUPERAR---------------->
                <center>
                <img src="../../assets/img/login.png" width="150px"><br><br>
                    <form method="POST" action="../../controlador/ejecutacambiocontra.php" class="form-signin" id="form1" name="form1">
                    <input type="hidden" name="codigo" value="<?php echo $id?>"><br>
                    Nueva Contraseña: <br>
                    <input type="text" name="contra1" style="width:45%; height:10%"class="form-control" required autofocus><br>
                    Rectifique Contraseña: <br>
                    <input type="text" name="contra2" style="width:45%; height:10%"class="form-control" required autofocus> <br>
                    <button class="btn btn-primary" type="submit" name="submit">Enviar</button>
                    <br><br>
                </form>
                </center>
            <!---------------RECUPERAR ---------------->
<?php
include_once'../../views/all/footer.php';
?> 