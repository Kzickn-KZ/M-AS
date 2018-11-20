<center><br>

    <h3><strong>TABLA VER HORAS DE APRENDICES</strong></h3>
    <em>(aca podra ver a todos los aprendices para verificar sus horas)</em></acronym><br><br>
    <?php
        include '../../modelo/Conexion.php';
        include_once '../../controlador/class.horas.php';
        include_once'../../controlador/class.usuario.php';
                    $prueba=Usuario::tipouser("WHERE documento='$_GET[codigoo]'");
                    while($arreglo=mysqli_fetch_array($prueba)){
                    $jeje = $arreglo['id_tipoUsuario'];
                    }
                    $sql = Horas::sumadehoras("WHERE documento='$_GET[codigoo]' and id_estado=3 and tok=0");
                    $fila=$sql->fetch_assoc();
                    $horitas=$fila['horitas'];
                    if($jeje==1){
                        $horastotales = 60;
                    }else{
                        $horastotales = 40;
                    }
                    $total = $horitas-$horastotales;
                    if ($horitas>=$horastotales) {
                    echo "<b>EL APRENDIZ YA COMPLETO SUS HORAS</b>";
                    }else{
                    echo "<b>LE FALTAN: " .-$total. " HORAS POR COMPLETAR EL APRENDIZ</b>";
                    }
                    echo "<br>";
                    echo "<br>";
        $query=Horas::imprimirHoras("WHERE horas.documento='$_GET[codigoo]' and tok=0");
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
        echo "</div>";
            ?>
<?php
$documento = $_GET['codigoo'];
$prinf = Horas::rowhoras($documento);
while($gf = $prinf->fetch_assoc()){
    $alv = $gf['fecha'];
}

        $sql = Horas::sumadehoras("WHERE documento='$_GET[codigoo]' and id_estado=3 and tok=1 and fecha='$alv'");
        $filas=$sql->fetch_assoc();
        $horitass=$filas['horitas'];
        $fechass = $filas['fechass'];
        $totals = $horitass-$horastotales;
        $fechaac = date('m-y');
            if($fechass){
                echo "<script>toastr.warning('DEBE UN TOTAL DE: ".-$totals." HORAS DEl MES $fechass','EL APRENDIZ: $_GET[codigoo]')</script>";
            }else{
                        echo "<script>toastr.warning('NO DEBE HORAS','EL APRENDIZ: $_GET[codigoo]')</script>";
                }
?>
<br>

