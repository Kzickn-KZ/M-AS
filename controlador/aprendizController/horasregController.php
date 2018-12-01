<center><br>
            <h3><strong>HORAS REALIZADAS</strong></h3>
            <em>(Aca podra visualizar las hora que lleva y las que le faltan por hacer)</em>
            <div id="pdfico">
                <a href="../../assets/pdf/creaPDF1.php"><img src="../../assets/img/pdf.png" style="Width:15%;"></a>
                <a href="../../assets/PHPExcel/reporte3.php"><img src="../../assets/img/ex.png" style="Width:15%;"></a>
                    </div>
                <?php
                include_once '../../controlador/class.horas.php';
                include_once'../../modelo/Conexion.php';
                ////////////////////SUMA DE HORAS /////////////////////////
                $sql = Horas::sumadehoras("WHERE documento='$_SESSION[documento]' and id_estado=3 and tok=0");
				$fila=$sql->fetch_assoc();
                $horitas=$fila['horitas'];
                if($_SESSION['id_tipoUsuario']==1){
                    $horastotales = 60;
                }else{
                    $horastotales= 40;
                }

/////////////////////HORAS FALTANTES///////////////////////
                $documento = $_SESSION['documento'];
                $prinf = Horas::rowhoras($documento);
                while($gf = $prinf->fetch_assoc()){
                $alv = $gf['fecha'];
        }
        $sql = Horas::sumadehoras("WHERE documento='$_SESSION[documento]' and id_estado=3 and tok=1 and fecha='$alv'");
        $filas=$sql->fetch_assoc();
        $horitass=$filas['horitas'];
        $fechass = $filas['fechass'];

        $totals = $horitass-$horastotales;

        $fechaac = date('m-y');
            if($horitass){
                echo "<script>toastr.warning('DEBE UN TOTAL DE: ".-$totals." HORAS DEl MES $fechass','EL APRENDIZ: $_SESSION[documento]')</script>";
            }else{
                        echo "<script>toastr.warning('NO DEBE HORAS','EL APRENDIZ: $_SESSION[documento]')</script>";
                }
/////////////////////FIN HORAS FALTANTES///////////////////////

                $total = $horitas-$horastotales;
                if ($horitas>=$horastotales){
                echo "<b>EL APRENDIZ YA COMPLETO SUS HORAS</b>";
                }else{
                echo "<b>TE FALTAN: " .-$total. " HORAS POR COMPLETAR</b>";
				}
                echo "<br>";
                echo "<br>";
                ?>

                <?php
                $registros=Horas::imprimirHoras("WHERE horas.documento='$_SESSION[documento]' and tok=0 ORDER BY horas.fecha ASC");
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
            echo '</tr>';
            echo '</thead>';
        while ($reg=$registros->fetch_array())
        {
        echo ' <tbody>';
        echo '<tr>';
        echo '<td>';
        echo $reg['documento'];
        echo '</td>';
        echo '<td>';
        echo $reg['fecha'];
        echo '</td>';
        echo '<td>';
        echo $reg['horas_realizadas'];
        echo '</td>';
        echo '<td>';
        echo $reg['descripcion'];
        echo '</td>';
        echo '<td>';
        echo $reg['nombresupervisor'];
        echo '</td>';
        echo '<td>';
        echo $reg['nombreestado'];
        echo '</td>';
        echo '</tr>';
        }
        echo ' <tbody>';
        echo '</table>';
        echo '</div>';
        ?>
            <br>
            <!---FIN TEXTO--->

<br>
