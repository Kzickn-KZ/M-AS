<div class="box" id="contenido">
            <center>
                <h3><strong>TABLA DE VISTA DE APRENDICES CITADOS</strong></h3>
                <em>(En esta tabla podra ver los aprendices citados)</em></acronym>
                <div id="pdfico">
                <img src="../../img/pdf.png" style="Width:20%;">
                </div><br><br>
                <?php
                require("../../modelo/conexion.php");
                include '../../controlador/class.citacion.php';
                $query=Citacion::veraprendicescitados("WHERE sede.id_sede='$_SESSION[id_sede]'");
                echo '<div class="datagrid" style="width:40%">';
                echo '<table  id="horas" >';
                echo'<thead>';
                echo '<tr>';
            echo "<th>Documento</th>";
            echo "<th>Citador</th>";
            echo "<th>Fecha</th>";
            echo "<th>Hora</th>";
            echo "<th>Sede</th>";
            echo "<th>Ambiente</th>";
        echo "</tr>";
    ?>
                <?php
        while($arreglo=mysqli_fetch_array($query)){
                echo "<tr class='success'>";
            $arreglo[0];
            echo "<td>$arreglo[2]</td>";
            echo "<td>$arreglo[1]</td>";
            echo "<td>$arreglo[3]</td>";
            echo "<td>$arreglo[4]</td>";
            echo "<td>$arreglo[5]</td>";
            echo "<td>$arreglo[6]</td>";
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