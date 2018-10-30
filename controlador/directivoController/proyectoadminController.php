<div class="box" id="contenido">
            <center>

                <h3><strong>TABLA PROYECTOS</strong></h3>
                <em>(Tabla para ver los proyectos de los aprendizes de monitorias y apoyo de sostenimiento)</em></acronym>
                <div id="pdfico">
                <img src="../../img/pdf.png" style="Width:20%;">
                </div><br><br>
                <form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="cdr" >
                    <p><input name="T1"  type="text" style="width:30%; height:5%" class="form-control" size="20"></p>
                    <input  name="buscar" type="submit" id="buscar" value="buscar" class="btn btn-lg btn-primary btn-block btn-sm" style="width: 100px"/>
                            </form>
                <?php
                    include_once'../../controlador/class.proyecto.php';
                    include_once'../../modelo/Conexion.php';
                    $query = Proyecto::verproyectos("");

                echo '<div class="datagrid" style="width:90%">';
                echo '<table  id="horas" >';
                echo'<thead>';
                echo "<th>Documento</th>";
                echo "<th>Fecha de inicio</th>";
                echo "<th>Fecha Final</th>";
                echo "<th>Nombre</th>";
                echo "<th>Descripcion</th>";
                echo "<th>supervisor</th>";
                echo "<th>estado</th>";
                echo "<th>activo</th>";
                echo "<th>inactivo</th>";

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
                    echo "<td><a href='../../controlador/prueba.php?codigo=$reg[id_proyecto]&codigoaceptar=2'><span class='glyphicon glyphicon-ok-circle'></a></td>";
                    echo "<td><a href='../../controlador/prueba.php?codigo=$reg[id_proyecto]&codigocancelar=2'><span class='glyphicon glyphicon-remove-circle'></a></td>";
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