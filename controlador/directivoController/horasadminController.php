<center><br>
                <h3><strong>TABLA VER HORAS DE APRENDICES</strong></h3>
                <a href="../../controlador/prueba.php?reinicio=2"><button type='button' class='btn btn-warning' style="width: 15%;
right: 30%; left: 43%;
height: 30%;
top: -80%; position: relative;"><img src="../../assets/img/delete.png" style="width:15%"></button></a>
                <form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="cdr" >
                <p><input name="T1"  type="text" style="width:30%; height:5%" class="form-control" size="20"></p>
                <input  name="buscar" type="submit" id="buscar" value="buscar" class="btn btn-lg btn-primary btn-block btn-sm" style="width: 100px"/>
                        </form><br>
                <?php
        require("../../modelo/conexion.php");
        include '../../controlador/class.horas.php';
        $query=Horas::imprimirHoras("WHERE horas.tok=0 GROUP BY horas.documento DESC");
        echo '<div class="table-responsive">';
        echo '<table class="table">';
        echo  '<thead class="bg-danger">';
        echo '<tr>';
        echo '<th scope="col">Documento</th>';
        echo '<th scope="col">Supervisor a cargo</th>';
        echo '<th scope="col">Mirar</th>';
        echo '</tr>';
        echo '</thead>';
        while($arreglo=mysqli_fetch_array($query)){
                echo "<tr class='success'>";
        $arreglo[0];
        echo "<td style='width:50%'>$arreglo[1]</td>";
        echo "<td style='width:100%'>$arreglo[5]</td>";
        echo "<td><a href='veraprendizhorasadmin.php?codigoo=$arreglo[1]'><button type='button' class='btn btn-dark'>Mirar</button></a></td>";
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
</div>
