            <center><br>
                <h3><strong>TABLA ACEPTAR Y RECHAZAR HORAS</strong></h3>
                <em>(En esta tabla podra observar las horas hechas por los aprendices y uste decide si las aprueba o
                    no)</em>
                    <div id="pdfico">
                <a href="../../assets/pdf/creaPDF4.php?codigo=<?php echo $_GET['codigoo'] ?>"><img src="../../assets/img/pdf.png" style="Width:15%;"></a>
                <a href="../../assets/PHPExcel/reporte1.php?codigo=<?php echo $_GET['codigoo'] ?>"><img src="../../assets/img/ex.png" style="Width:15%;"></a>
                    </div>
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
        $query=Horas::imprimirHoras("WHERE usuario.id_usuario=$_SESSION[id_usuario] and  horas.documento='$_GET[codigoo]' and tok=0");
        echo '<div class="table-responsive table-hover">';
        echo '<table class="table">';
        echo  '<thead class="bg-danger">';
        echo '<tr>';
        echo '<th scope="col">Documento</th>';
        echo '<th scope="col">Fecha</th>';
        echo '<th scope="col">Horas Realizadas</th>';
        echo '<th scope="col">Descripcion</th>';
        echo '<th scope="col">Supervisor a cargo</th>';
        echo '<th scope="col">Estado</th>';
        echo '<th scope="col">Aceptar</th>';
        echo '<th scope="col">Rechazar</th>';
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
            echo "<td><a href='../../controlador/prueba.php?codigo=$arreglo[0]&codigoborrarr=2'><button type='button' class='btn btn-danger'>Rechazar</button></a></td>";
            echo "<td><a href='../../controlador/prueba.php?codigo=$arreglo[0]&codigohabilitarr=2'><button type='button' class='btn btn-warning'>Aceptar</button></a></td>";
        echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
?><br>
<!----ALERTA DE DEBER HORAS---->

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
            if($fechass<$fechaac){
                echo "<script>toastr.warning('DEBE UN TOTAL DE: ".-$totals." HORAS DE EL MES $fechass','EL APRENDIZ: $_GET[codigoo]')</script>";
            }else{
                        echo "<script>toastr.warning('NO DEBE HORAS','EL APRENDIZ: $_GET[codigoo]')</script>";
                }
?>
<br>