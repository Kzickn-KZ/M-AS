<div class="box" id="contenido">
            <center>
                <h3><strong>TABLA DE NOVEDADES DE APRENDICES</strong></h3>
                <em>(podra ver las novedades que le hacen los aprendices)</em></acronym>
                <div id="pdfico">
                <img src="../../img/pdf.png" style="Width:20%;">
                </div><br><br>

    <?php
    include_once'../../modelo/Conexion.php';
        include_once'../../controlador/class.notificar.php';
        $sql = Novedades::imprimirnovedad("WHERE novedades.id_usuario='$_SESSION[id_usuario]'");

        echo '<div class="datagrid" style="width:75%">';
                echo '<table  id="horas" >';
                    echo'<thead>';
            echo "<th>TIPO NOVEDAD</th>";
            echo "<th>DOCUMENTO</th>";
            echo "<th>FECHA</th>";
            echo "<th>DESCRIPCION</th>";
            echo "<th>SUPERVISOR</th>";
            echo "<th>ESTADO</th>";
            echo "<th>RECHAZAR</th>";
            echo "<th>ACEPTAR</th>";
        echo "</tr>";
    ?>
    <?php
    while($arreglo=mysqli_fetch_array($sql)){
        echo "<tr class='success'>";
        $arreglo[0];
        echo "<td>$arreglo[1]</td>";
        echo "<td>$arreglo[2]</td>";
        echo "<td>$arreglo[3]</td>";
        echo "<td>$arreglo[4]</td>";
        echo "<td>$arreglo[5]</td>";
        echo "<td>$arreglo[6]</td>";

        echo "<td><a href='../../controlador/prueba.php?codigo=$arreglo[2]&estadox=2'><span class='glyphicon glyphicon-remove-circle'></a></td>";
        echo "<td><a href='../../controlador/prueba.php?codigo=$arreglo[2]&estadoy=2'><span class='glyphicon glyphicon-ok-circle'></a></td>";


        echo "</tr>";


    }
    echo "</table>"
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