<div class="box" id="contenido">
            <center>

                <h3><strong>TABLA VER HORAS DE APRENDICES</strong></h3>
                <em>(aca podra ver a todos los aprendices para verificar sus horas)</em></acronym><br><br>
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
        $query=Horas::imprimirHoras("WHERE horas.documento='$_GET[codigoo]' and tok=0");
        echo '<div class="datagrid" style="width:100%;">';
                echo '<table  id="horas" >';
                    echo'<thead>';
            echo "<th>Documento</th>";
            echo "<th>Fecha</th>";
            echo "<th>Horas realizadas</th>";
            echo "<th>Descripcion</th>";
            echo "<th>Supervisor a cargo</th>";
            echo "<th>Estado</th>";
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
        echo "</tr>";
        }
        echo "</table>";
            ?>
            </center>
            <br>
            <?php
            if ($horitas>=$horastotales) {
            echo "<a href='../../controlador/prueba.php?codigo=$_GET[codigoo]&codigotok=2'><img src='../../img/aceptar.png' class='img-rounded'/></a>";
            }
            ?>
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