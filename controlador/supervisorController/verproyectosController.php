<div class="box" id="contenido">
            <center><br>
                <h3><strong>TABLA DE PROYECTOS A CARGO</strong></h3>
                <em>(podra visualizar los proyectos de aprendices donde usted esta a cargo)</em></acronym>
                <div id="pdfico">
                <a href="../../assets/pdf/creaPDF3.php"><img src="../../assets/img/pdf.png" style="Width:15%;"></a>
                <a href="../../assets/PHPExcel/reporte2.php"><img src="../../assets/img/ex.png" style="Width:15%;"></a>
                    </div>

                <?php
                include_once'../../modelo/conexion.php';
                include_once'../../controlador/class.proyecto.php';

                $query = Proyecto::verproyectos("WHERE usuario.id_usuario='$_SESSION[id_usuario]'");

            echo '<div class="table-responsive">';
            echo '<table class="table">';
            echo  '<thead class="bg-danger">';
            echo '<tr>';
            echo '<th scope="col">Documento</th>';
            echo '<th scope="col">Fecha inicio</th>';
            echo '<th scope="col">Fecha final</th>';
            echo '<th scope="col">Nombre de el proyecto</th>';
            echo '<th scope="col">Descripcion</th>';
            echo '<th scope="col">Supervisor a cargo</th>';
            echo '<th scope="col">Estado</th>';
            echo '<th scope="col">Habilitar</th>';
            echo '<th scope="col">Deshabilitar</th>';
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
            echo "<td>$arreglo[7]</td>";
            echo "<td><a href='../../controlador/prueba.php?codigo=$arreglo[0]&proyecaceptar=2'><button type='button' class='btn btn-warning'>Habilitar</button></a></td>";
            echo "<td><a href='../../controlador/prueba.php?codigo=$arreglo[0]&proyeccancelar=2'><button type='button' class='btn btn-danger'>Inhabilitar</button></a></td>";
            echo "</tr>";
        }

        echo "</table>";
        echo '</div>';

                ?>
                <!----TEXTO---->
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