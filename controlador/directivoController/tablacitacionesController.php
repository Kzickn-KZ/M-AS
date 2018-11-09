            <center><br>
                <h3><strong>TABLA DE CITACIONES</strong></h3>
                <em>(Podra ver las citaciones realizadas, tendra la opcion de cancelarla)</em></acronym><br>
                <form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="cdr" >
                    <p><input name="T1"  type="text" style="width:30%; height:5%" class="form-control" size="20"></p>
                    <input  name="buscar" type="submit" id="buscar" value="buscar" class="btn btn-lg btn-primary btn-block btn-sm" style="width: 100px"/>
                            </form><br>
                <?php
                //CODIGO PARA ERROR QUE SALE EN LA CONEXION//PERO AL QUITARLA NO SERVIRIA NADA//
                ini_set('display_errors','off');
                ini_set('display_startup_errors','off');
                error_reporting(0);
                $buscar = $_POST['T1'];
                include_once'../../modelo/Conexion.php';
                include_once'../../controlador/class.citacion.php';

                $sql = Citacion::veraprendicescitados("WHERE documento LIKE '%".$buscar."%' ");
                echo '<div class="table-responsive table-hover">';
                echo '<table class="table">';
                echo  '<thead class="bg-danger">';
                echo '<tr>';
                echo '<th scope="col">Documento</th>';
                echo '<th scope="col">Citador</th>';
                echo '<th scope="col">Fecha</th>';
                echo '<th scope="col">Hora</th>';
                echo '<th scope="col">Sede</th>';
                echo '<th scope="col">Ambiente</th>';
                echo '<th scope="col">Cancelar</th>';
                echo '</tr>';
                echo '</thead>';
                while ($arreglo=mysqli_fetch_array($sql)) {
                    echo "<tr class='success'>";
                    $arreglo[0];
                    echo "<td>$arreglo[2]</td>";
                    echo "<td>$arreglo[1]</td>";
                    echo "<td>$arreglo[3]</td>";
                    echo "<td>$arreglo[4]</td>";
                    echo "<td>$arreglo[5]</td>";
                    echo "<td>$arreglo[6]</td>";
                    echo "<td><a href='../../controlador/prueba.php?codigo=$arreglo[0]&codigoborrar=2'><button type='button' class='btn btn-danger'>Cancelar</button></a></td>";
                }
                echo "</table>";
?>