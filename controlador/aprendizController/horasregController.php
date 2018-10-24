<div class="box" id="contenido">
            <!----------------AQUI VA TEXTO DE INICIO CON CALENDARIO-------------->
            <h3><strong>Horas realizadas</strong></h3>
            <em>(Aca podra visualizar las hora que lleva y las que le faltan por hacer)</em>
            <div id="pdfico">
                <a href=""><img src="../../img/pdf.png" style="Width:20%;"></a>
                </div><br><br>
                <?php
                include_once '../../controlador/class.horas.php';
                include_once'../../modelo/Conexion.php';
                $sql = Horas::sumadehoras("WHERE documento='$_SESSION[documento]' and id_estado=3");
				$fila=$sql->fetch_assoc();
                $horitas=$fila['horitas'];
				$horastotales= 40;
                $total = $horitas-$horastotales;
                if ($horitas>=$horastotales) {
                echo "<b>EL APRENDIZ YA COMPLETO SUS HORAS</b>";
                }else{
                echo "<b>TE FALTAN: " .$total. " HORAS POR COMPLETAR</b>";
				}
                echo "<br>";
                echo "<br>";
                ?>
                <?php
                $registros=Horas::imprimirHoras("WHERE horas.documento='$_SESSION[documento]' ORDER BY horas.fecha ASC");
                echo '<div class="datagrid">';
                echo '<table  id="horas">';
                echo'<thead>';
                echo '<tr>
            <th class="center">DOCUMENTO</th>
            <th class="center">FECHA</th>
            <th class="center">HORAS REALIZADAS</th>
            <th class="center">DESCRIPCION</th>
            <th class="center">SUPERVISOR</th>
            <th class="center">ESTADO</th>
            ';
        while ($reg=$registros->fetch_array())
        {
        echo ' <tbody>';
        echo '<tr class="">';
        echo '<td>';
        echo $reg['documento'];
        echo '</td>';
        echo '<td>';
        echo $reg['fecha'];
        echo '</td>';
        echo '<td>';
        echo $reg['horas_realizadas'];
        echo '</td>';
        echo '<td style="30%">';
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