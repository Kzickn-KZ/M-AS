<div class="box" id="contenido">
            <center>

                <h3><strong>TABLA VER HORAS DE APRENDICES</strong></h3>
                <em>(aca podra ver a todos los aprendices para verificar sus horas)</em></acronym>
                <div id="pdfico">
                <img src="../../img/pdf.png" style="Width:20%;">
                </div><br><br>
                <form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="cdr" >
                    <p><input name="T1"  type="text" style="width:30%; height:5%" class="form-control" size="20"></p>
                    <input  name="buscar" type="submit" id="buscar" value="buscar" class="btn btn-lg btn-primary btn-block btn-sm" style="width: 100px"/>
                            </form>
                <?php

        require("../../modelo/conexion.php");
        include '../../controlador/class.horas.php';

        $query=Horas::imprimirHoras("GROUP BY horas.documento DESC");
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
            echo "<td><a href='veraprendizhorasadmin.php?codigoo=$arreglo[1]'><span class='glyphicon glyphicon-eye-open'></a></td>";
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