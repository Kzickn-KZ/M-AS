<center><br>
                <h3><strong>REPORTE DE HORAS APRENDICES</strong></h3>
                <em>(podra buscar todas las horas de los aprendices hechas tiene una barra de busqueda para fecha y documento)</em>
                <form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="cdr" >
                <p><input name="T1"  type="text" style="width:30%; height:5%" class="form-control" size="20"></p>
                <input  name="buscar" type="submit" id="buscar" value="buscar" class="btn btn-lg btn-primary btn-block btn-sm" style="width: 100px"/>
                </form><br>
                <?php
                //CODIGO PARA ERROR QUE SALE EN LA CONEXION//PERO AL QUITARLA NO SERVIRIA NADA//
                ini_set('display_errors','off');
                ini_set('display_startup_errors','off');
                error_reporting(0);

                $buscar = $_POST['T1'];
        require("../../modelo/conexion.php");
        include '../../controlador/class.horas.php';
        $query=Horas::imprimirHoras("WHERE horas.documento LIKE '%".$buscar."%' or horas.fecha LIKE '%".$buscar."%' ORDER BY horas.documento");
        echo '<div class="table-responsive table-hover">';
        echo '<table class="table">';
        echo  '<thead class="bg-danger">';
        echo '<tr>';
        echo '<th scope="col">Documento</th>';
        echo '<th scope="col">Fecha</th>';
        echo '<th scope="col">Horas Realizadas</th>';
        echo '<th scope="col">Descripcion</th>';
        echo '<th scope="col">Supervisor</th>';
        echo '<th scope="col">Estado</th>';
        echo '</tr>';
        echo '</thead>';
        while($arreglo=mysqli_fetch_array($query)){
                echo "<tr class='success'>";
        $arreglo[0];
        echo "<td>$arreglo[1]</td>";
        echo "<td>$arreglo[2]</td>";
        echo "<td>$arreglo[3]</td>";
        echo "<td>$arreglo[4]</td>";
        echo "<td>$arreglo[5]</td>";
        echo "<td>$arreglo[6]</td>";
        echo "</tr>";
        }
        echo "</table>";
?>
</div>

</center>