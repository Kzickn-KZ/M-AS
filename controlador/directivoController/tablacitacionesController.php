<div class="box" id="contenido">
            <center>

                <h3><strong>TABLA DE CITACIONES</strong></h3>
                <em>(Podra ver las citaciones realizadas, tendra la opcion de cancelarla)</em></acronym>
                <div id="pdfico">
                <img src="../../img/pdf.png" style="Width:20%;">
                </div><br><br>
                <form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="cdr" >
                    <p><input name="T1"  type="text" style="width:30%; height:5%" class="form-control" size="20"></p>
                    <input  name="buscar" type="submit" id="buscar" value="buscar" class="btn btn-lg btn-primary btn-block btn-sm" style="width: 100px"/>
                            </form>
                <?php
                include_once'../../modelo/Conexion.php';
                include_once'../../controlador/class.citacion.php';

                $sql = Citacion::veraprendicescitados("");

                echo '<div class="datagrid" style="width:50%">';
                echo '<table  id="horas" >';
                echo'<thead>';
                echo "<th>Doc. aprendiz</th>";
                echo "<th>Citador</th>";
                echo "<th>Fecha</th>";
                echo "<th>Hora</th>";
                echo "<th>Sede</th>";
                echo "<th>Ambiente</th>";
                echo "<th>Cancelar</th>";
                while ($arreglo=mysqli_fetch_array($sql)) {
                    echo "<tr class='success'>";
                    $arreglo[0];
                    echo "<td>$arreglo[2]</td>";
                    echo "<td>$arreglo[1]</td>";
                    echo "<td>$arreglo[3]</td>";
                    echo "<td>$arreglo[4]</td>";
                    echo "<td>$arreglo[5]</td>";
                    echo "<td>$arreglo[6]</td>";
                    echo "<td><a href='../../controlador/prueba.php?codigo=$arreglo[0]&codigoborrar=2'><span class='glyphicon glyphicon-remove-circle'></a></td>";
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