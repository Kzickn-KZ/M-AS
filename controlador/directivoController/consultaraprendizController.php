<div class="box" id="contenido">
            <center>
                <h3><strong>TABLA PARA CITAR APRENDICES</strong></h3>
                <em>(En esta tabla podra citar a el aprendiz seleccionado)</em></acronym>
                <div id="pdfico">
                <a href=""><img src="../img/pdf.png" style="Width:20%;"></a>
                </div>
                <br><br>
                <form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="cdr" >
                    <p><input name="T1"  type="text" style="width:30%; height:5%" class="form-control" size="20"></p>
                    <input  name="buscar" type="submit" id="buscar" value="buscar" class="btn btn-lg btn-primary btn-block btn-sm" style="width: 100px"/>
                </form>
                <?php
                require("../../modelo/conexion.php");
                include '../../controlador/class.usuario.php';
                $query=Usuario::imprimirusuario("WHERE usuario.id_estado=1 and rol.id_rol=1");
                echo '<div class="datagrid" style="width:58%">';
                echo '<table  id="horas" >';
                echo'<thead>';
                echo '<tr>';
                echo "<th>Documento</th>";
                echo "<th>Nombre</th>";
                echo "<th>Apellido</th>";
                //echo "<th>Telefono</th>";
                echo "<th>Sede</th>";
                echo "<th>Programa</th>";
                echo "<th>Ficha</th>";
                echo "<th>Tipo de usuario</th>";
                echo "<th>Citar</th>";
                echo "</tr>";
?>
                <?php
                while($arreglo=mysqli_fetch_array($query)){
                echo "<tr class='success'>";
                $arreglo[0];
                echo "<td>$arreglo[1]</td>";
                //echo "<td>$arreglo[2]</td>";
                echo "<td>$arreglo[3]</td>";
                echo "<td>$arreglo[4]</td>";
                //echo "<td>$arreglo[5]</td>";
                echo "<td>$arreglo[6]</td>";
                echo "<td>$arreglo[7]</td>";
                echo "<td>$arreglo[8]</td>";
                echo "<td>$arreglo[9]</td>";
                //echo "<td>$arreglo[10]</td>";
                //echo "<td>$arreglo[11]</td>";
                echo "<td><a href='citacion.php?id=$arreglo[0]'><span class='glyphicon glyphicon-exclamation-sign'></a></td>";
        }
        echo "</table>";
    ?>
            </center>
            <br>
            <br>
            <div class="row-f luid">
                <div class="span8">
                </div>
            </div>
            <br />
    </center>
    </div>




    </center>