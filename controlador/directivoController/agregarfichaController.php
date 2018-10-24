<div class="box" id="contenido">
            <center>
                <h3><strong>TABLA DE FICHAS</strong></h3>
                <em>(tabla para agregar fichas y  ver fichas)</em></acronym><br><br>

                <form method="POST" action="../../controlador/ejecutaficha.php">
                    Agregar ficha:
                    <input type="text" name="ficha" id="ficha" style="width:50%; height:8%" class="form-control"
                        placeholder="Ficha"><br>
                    <input type="submit" name="" value="Enviar" class="btn btn-lg btn-primary btn-block btn-sm" style="width:10%">
                </form>
                <br><br>




                <?php
                include_once'../../modelo/Conexion.php';
                include_once'../../controlador/class.ficha.php';
                $sql = Ficha::imprimirficha("");
                echo '<div class="datagrid" style="width:30%">';
                echo '<table  id="horas" >';
                    echo'<thead>';

                echo "<th>Numero de ficha</th>";
                echo "<th>Estado</th>";
                echo "<th>Habilitar</th>";
                echo "<th>Deshabilitar</th>";

                while ($reg= Mysqli_fetch_array($sql)) {
                echo "<tr class='success'>";
                $reg['id_ficha'];
                echo "<td>";
                echo $reg['nombre'];
                echo "</td>";
                echo "<td>";
                echo $reg['estadoo'];
                echo "</td>";
                echo "<td><a href='../../controlador/prueba.php?codigo=$reg[id_ficha]&fichahabilitar=2'><span class='glyphicon glyphicon-ok-circle'></a></td>";
                echo "<td><a href='../../controlador/prueba.php?codigo=$reg[id_ficha]&fichadeshabilitar=2'><span class='glyphicon glyphicon-remove-circle'></a></td>";
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