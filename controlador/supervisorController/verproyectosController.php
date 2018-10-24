<div class="box" id="contenido">
            <center>
                <h3><strong>TABLA DE PROYECTOS A CARGO</strong></h3>
                <em>(podra visualizar los proyectos de aprendices donde usted esta a cargo)</em></acronym>
                <div id="pdfico">
                <img src="../../img/pdf.png" style="Width:20%;">
                </div><br><br>

                <?php

                    include_once'../../modelo/conexion.php';
                    include_once'../../controlador/class.proyecto.php';

                    $query = Proyecto::verproyectos("WHERE usuario.id_usuario='$_SESSION[id_usuario]'");

            echo '<div class="datagrid" style="width:80%">';
            echo '<table  id="horas" >';
            echo'<thead>';
            echo "<th>Documento aprendiz</th>";
            echo "<th>Fecha inicio</th>";
            echo "<th>Fecha Final</th>";
            echo "<th>Nombre proyecto</th>";
            echo "<th>Descripcion</th>";
            echo "<th>Supervisor a cargo</th>";
            echo "<th>Estado</th>";
            echo "</tr>";
?>
                <?php
        while($arreglo=mysqli_fetch_array($query)){
                echo "<tr class='success'>";
            echo "<td>$arreglo[1]</td>";
            echo "<td>$arreglo[2]</td>";
            echo "<td>$arreglo[3]</td>";
            echo "<td>$arreglo[4]</td>";
            echo "<td>$arreglo[5]</td>";
            echo "<td>$arreglo[6]</td>";
            echo "<td>$arreglo[7]</td>";
            echo "</tr>";
        }

        echo "</table>";

                ?>
                <!----TEXTO---->
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