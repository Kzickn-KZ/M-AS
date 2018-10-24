 <div class="box" id="contenido">
            <center>
                <h3><strong>TABLA DONDE PODRA VER LOS APRENDICES</strong></h3>
                <em>(En esta tabla podra ver los aprendices a cargo)</em></acronym><br><br>
                <?php

        require("../../modelo/conexion.php");
        include '../../controlador/class.horas.php';

        $query=Horas::imprimirHoras(" WHERE usuario.id_usuario=$_SESSION[id_usuario] GROUP BY documento");
        echo '<div class="datagrid" style="width:40%">';
                echo '<table  id="horas" >';
                    echo'<thead>';
            echo "<th>Documento</th>";
            echo "<th>Supervisor a cargo</th>";
            echo "<th>Mirar</th>";
            //echo "<th>Horas realizadas</th>";
            //echo "<th>Descripcion</th>";
            //echo "<th>Supervisor</th>";
            //echo "<th>Estado</th>";
            //echo "<th>Rechazar</th>";
            //echo "<th>Aceptar</th>";
        echo "</tr>";
    ?>
                <?php
        while($arreglo=mysqli_fetch_array($query)){
                echo "<tr class='success'>";
            $arreglo[0];
            echo "<td style='width:50%'>$arreglo[1]</td>";
            echo "<td style='width:100%'>$arreglo[5]</td>";
            echo "<td><a href='veraprendizhoras.php?codigoo=$arreglo[1]'><span class='glyphicon glyphicon-eye-open'></a></td>";
            //echo "<td>$arreglo[3]</td>";
            //echo "<td>$arreglo[4]</td>";
            //echo "<td>$arreglo[5]</td>";
            //echo "<td>$arreglo[6]</td>";
            //echo "<td><a href='inicio_supervisor.php?codigo=$arreglo[0]&codigoborrar=2'><span class='glyphicon glyphicon-remove-circle'></a></td>";
            //echo "<td><a href='inicio_supervisor.php?codigo=$arreglo[0]&codigohabilitar=2'><span class='glyphicon glyphicon-ok-circle'></a></td>";
        echo "</tr>";
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