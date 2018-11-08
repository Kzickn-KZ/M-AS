            <center><br>
                <h3><strong>TABLA DE FICHAS</strong></h3>
                <em>(tabla para agregar fichas y  ver fichas)</em></acronym><br><br>

                <form method="POST" action="../../controlador/ejecutaficha.php">
                    Agregar ficha:
                    <input type="text" name="ficha" id="ficha" style="width:50%; height:8%" class="form-control"
                        placeholder="Ficha" required><br>
                    <input type="submit" name="" value="Enviar" class="btn btn-lg btn-primary btn-block btn-sm" style="width:10%">
                </form>
                <br><br>




                <?php
                include_once'../../modelo/Conexion.php';
                include_once'../../controlador/class.ficha.php';
                $sql = Ficha::imprimirficha("");
                echo '<div class="table-responsive">';
                echo '<table class="table">';
                echo  '<thead class="bg-danger">';
                echo '<tr>';
                echo '<th scope="col">Numero De ficha</th>';
                echo '<th scope="col">Estado</th>';
                echo '<th scope="col">Habilitar</th>';
                echo '<th scope="col">Deshabilitar</th>';
                echo '</tr>';
                echo '</thead>';
                while ($reg= Mysqli_fetch_array($sql)) {
                echo "<tr class='success'>";
                $reg['id_ficha'];
                echo "<td>";
                echo $reg['nombre'];
                echo "</td>";
                echo "<td>";
                echo $reg['estadoo'];
                echo "</td>";
                echo "<td><a href='../../controlador/prueba.php?codigo=$reg[id_ficha]&fichahabilitar=2'><button type='button' class='btn btn-warning'>Habilitar</button></a></td>";
                echo "<td><a href='../../controlador/prueba.php?codigo=$reg[id_ficha]&fichadeshabilitar=2'><button type='button' class='btn btn-danger'>Deshabilitar</button></a></td>";
                }

                echo "</table>";


                    ?>