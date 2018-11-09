<center>
<h3><strong>Citaciones</strong></h3>
<em>(Revisar citaciones)</em></acronym><br><br>
<?php

include_once'../../modelo/Conexion.php';
include_once'../../controlador/class.citacion.php';
$db = New Conexion();
    $consulta=Citacion::veraprendicescitados("WHERE usuario.documento='$_SESSION[documento]'");
echo '<div class="table-responsive table-hover">';
    echo '<table class="table">';
    echo  '<thead class="bg-danger">';
    echo '<tr>';
    echo '<th scope="col">Documento</th>';
    //echo '<th scope="col">Citador</th>';
    echo '<th scope="col">Fecha</th>';
    echo '<th scope="col">Hora</th>';
    echo '<th scope="col">Sede</th>';
    echo '<th scope="col">Ambiente</th>';
    echo '</tr>';
    echo '</thead>';
    while($reg=$consulta->fetch_array())
    {
                    echo ' <tbody>';
                    echo '<tr class="alt">';
                    echo '<td>';
                    echo $reg['usuario'];
                    echo '</td>';
                    //echo '<td>';
                    //echo $reg['citador'];
                    //echo '</td>';
                    echo '<td>';
                    echo $reg['fecha'];
                    echo '</td>';
                    echo '<td style="width:50%">';
                    echo $reg['hora'];
                    echo '</td>';
                    echo '<td>';
                    echo $reg['seedee'];
                    echo '</td>';
                    echo '<td>';
                    echo $reg['ambiente'];
                    echo '</td>';
                    echo '</tr>';
}
                    echo ' <tbody>';
                    echo '</table>';
                    echo '</div>';


?>