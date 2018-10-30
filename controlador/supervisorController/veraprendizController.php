<div class="box" id="contenido">
            <center>
                <h3><strong>TABLA ACEPTAR Y RECHAZAR HORAS</strong></h3>
                <em>(En esta tabla podra observar las horas hechas por los aprendices y uste decide si las aprueba o
                    no)</em></acronym><br><br>
                    <?php
        include '../../modelo/Conexion.php';
        include_once '../../controlador/class.horas.php';
                    $sql = Horas::sumadehoras("WHERE documento='$_GET[codigoo]' and id_estado=3 and tok=0");
                    $fila=$sql->fetch_assoc();
                    $horitas=$fila['horitas'];
                    $horastotales= 40;
                    $total = $horitas-$horastotales;
                    if ($horitas>=$horastotales) {
                    echo "<b>EL APRENDIZ YA COMPLETO SUS HORAS</b>";
                    }else{
                    echo "<b>LE FALTAN: " .$total. " HORAS POR COMPLETAR EL APRENDIZ</b>";
                    }
                    echo "<br>";
                    echo "<br>";
        $query=Horas::imprimirHoras("WHERE usuario.id_usuario=$_SESSION[id_usuario] and  horas.documento='$_GET[codigoo]' and tok=0");
        echo '<div class="datagrid" style="width:100%">';
                echo '<table  id="horas" >';
                    echo'<thead>';
            echo "<th>Documento</th>";
            echo "<th>Fecha</th>";
            echo "<th>Horas realizadas</th>";
            echo "<th>Descripcion</th>";
            echo "<th>Supervisor a cargo</th>";
            echo "<th>Estado</th>";
            echo "<th>Rechazar</th>";
            echo "<th>Aceptar</th>";
        echo "</tr>";
    ?>
                <?php
        while($arreglo=mysqli_fetch_array($query)){
                echo "<tr class='success'>";
            $arreglo[0];
            echo "<td>$arreglo[1]</td>";
            echo "<td>$arreglo[2]</td>";
            echo "<td>$arreglo[3]</td>";
            echo "<td>$arreglo[4]</td>";
            echo "<td>$arreglo[5]</td>";
            echo "<td>$arreglo[6]</td>";
            echo "<td><a href='../../controlador/prueba.php?codigo=$arreglo[0]&codigoborrarr=2'><span class='glyphicon glyphicon-remove-circle'></a></td>";
            echo "<td><a href='../../controlador/prueba.php?codigo=$arreglo[0]&codigohabilitarr=2'><span class='glyphicon glyphicon-ok-circle'></a></td>";
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