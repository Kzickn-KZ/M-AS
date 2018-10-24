<div class="box" id="contenido">
            <center>
                <!----------------AQUI VA TEXTO DE INICIO CON CALENDARIO-------------->
                <h3><strong>NOVEDADES REALIZADAS</strong></h3>
                <em>Tabla de novedades realizadas, aceptadas o rechazadas</em></acronym>
                <div id="pdfico">
                <a href=""><img src="../../img/pdf.png" style="Width:20%;"></a>
                </div><br><br>
                <?php
                include_once '../../modelo/conexion.php';
                include_once '../../controlador/class.notificar.php';
    $consulta=Novedades::imprimirnovedad("WHERE novedades.documento='$_SESSION[documento]'");
    echo '<div class="datagrid" style="width:100%">';
                echo '<table  id="horas" >';
                echo'<thead>';
                echo '<tr>
            <th class="center">TIPO NOVEDAD</th>
            <th class="center">DOCUMENTO</th>
            <th class="center">FECHA</th>
            <th class="center">DESCRIPCION</th>
            <th class="center">SUPERVISOR</th>
            <th class="center">ESTADO</th>
            ';
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
                    echo '<td style="width:50%">';
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