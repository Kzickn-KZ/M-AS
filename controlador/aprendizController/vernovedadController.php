
            <center><br>
                <!----------------AQUI VA TEXTO DE INICIO CON CALENDARIO-------------->
                <h3><strong>NOVEDADES REALIZADAS</strong></h3>
                <em>Tabla de novedades realizadas, aceptadas o rechazadas</em></acronym>
                <div id="pdfico">
                <a href="../../assets/pdf/creaPDF2.php"><img src="../../assets/img/pdf.png" style="Width:15%;"></a>
                <a href="../../assets/PHPExcel/reporte4.php"><img src="../../assets/img/ex.png" style="Width:15%;"></a>
                    </div>
                <?php
                include_once '../../modelo/conexion.php';
                include_once '../../controlador/class.notificar.php';
    $consulta=Novedades::imprimirnovedad("WHERE novedades.documento='$_SESSION[documento]'");
    echo '<div class="table-responsive table-hover">';
    echo '<table class="table">';
    echo  '<thead class="bg-danger">';
    echo '<tr>';
    echo '<th scope="col">Tipo Novedad</th>';
    echo '<th scope="col">Documento</th>';
    echo '<th scope="col">Fecha</th>';
    echo '<th scope="col">Descripcion</th>';
    echo '<th scope="col">Supervisor a cargo</th>';
    echo '<th scope="col">Estado</th>';
    echo '</tr>';
    echo '</thead>';
    while($reg=$consulta->fetch_array())
    {
                    echo ' <tbody>';
                    echo '<tr class="alt">';
                    echo '<td>';
                    echo $reg['tipo'];
                    echo '</td>';
                    echo '<td>';
                    echo $reg['documento'];
                    echo '</td>';
                    echo '<td>';
                    echo $reg['fecha'];
                    echo '</td>';
                    echo '<td style="width:20%">';
                    echo $reg['descripcion'];
                    echo '</td>';
                    echo '<td>';
                    echo $reg['supervisor'];
                    echo '</td>';
                    echo '<td>';
                    echo $reg['estado'];
                    echo '</td>';
                    echo '</tr>';
}
                    echo ' <tbody>';
                    echo '</table>';
                    echo '</div>';
                    ?>
                <!---FIN TEXTO--->
