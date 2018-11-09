<center><br>

    <h3><strong>TABLA PROYECTOS</strong></h3>
    <em>(Tabla para ver los proyectos de los aprendizes de monitorias y apoyo de sostenimiento)</em></acronym>
    <div id="pdfico">
        <a href="../../assets/pdf/creaPDF5.php"><img src="../../assets/img/pdf.png" style="Width:15%;"></a>
        <img src="../../assets/img/ex.png" style="Width:15%;">
    </div>
    <form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="cdr">
        <p><input name="T1" type="text" style="width:30%; height:5%" class="form-control" size="20"></p>
        <input name="buscar" type="submit" id="buscar" value="buscar" class="btn btn-lg btn-primary btn-block btn-sm"
            style="width: 100px" />
    </form><br>
            <?php
            //CODIGO PARA ERROR QUE SALE EN LA CONEXION//PERO AL QUITARLA NO SERVIRIA NADA//
            ini_set('display_errors','off');
            ini_set('display_startup_errors','off');
            error_reporting(0);
            $buscar = $_POST['T1'];
                    include_once'../../controlador/class.proyecto.php';
                    include_once'../../modelo/Conexion.php';
                    $query = Proyecto::verproyectos("WHERE proyecto.documento LIKE '%".$buscar."%'");
                    echo '<div class="table-responsive">';
                    echo '<table class="table">';
                    echo  '<thead class="bg-danger">';
                    echo '<tr>';
                    echo '<th scope="col">Documento</th>';
                    echo '<th scope="col">Fecha de inicio</th>';
                    echo '<th scope="col">Fecha final </th>';
                    echo '<th scope="col">Nombre del proyecto</th>';
                    echo '<th scope="col">Descripcion</th>';
                    echo '<th scope="col">Supervisor</th>';
                    echo '<th scope="col">Estado</th>';
                    echo '</tr>';
                    echo '</thead>';
                    while($reg=$query->fetch_array()){
                    echo "<tr class='success'>";
                    $reg['id_proyecto'];
                    echo "<td>";
                    echo $reg['documento'];
                    echo "</td>";
                    echo "<td>";
                    echo $reg['fechainicio'];
                    echo "</td>";
                    echo "<td>";
                    echo $reg['fechafinal'];
                    echo "</td>";
                    echo "<td>";
                    echo $reg['nombre'];
                    echo "</td>";
                    echo "<td>";
                    echo $reg['descripcion'];
                    echo "</td>";
                    echo "<td>";
                    echo $reg['nombresupervisor'];
                    echo "</td>";
                    echo "<td>";
                    echo $reg['nombreestado'];
                    }
                    echo "</table>";


    ?>