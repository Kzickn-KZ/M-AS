
            <center><br>
                <h3><strong>TABLA DE PROGRAMAS</strong></h3>
                <em>(tabla para agregar programas y  ver programas)</em></acronym><br><br>

                <form method="POST" action="../../controlador/ejecutaprograma.php">
                    Agregar programa:
                    <input type="text" name="nombre" id="nombre" style="width:50%; height:8%" class="form-control"
                        placeholder="Programa" required><br>
                    <input type="submit" name="" value="Enviar" class="btn btn-lg btn-primary btn-block btn-sm" style="width:10%">
                </form>
                <br><br>

                <?php
                include_once'../../modelo/Conexion.php';
                include_once'../../controlador/class.programa.php';
                $sql = Programa::imprimirprograma("");
                echo '<div class="table-responsive">';
                echo '<table class="table">';
                echo  '<thead class="bg-danger">';
                echo '<tr>';
                echo '<th scope="col">Nombre del programa</th>';
                echo '<th scope="col">Estado</th>';
                echo '<th scope="col">Habilitar</th>';
                echo '<th scope="col">Deshabilitar</th>';
                echo '</tr>';
                echo '</thead>';
                while ($reg= Mysqli_fetch_array($sql)) {
                echo "<tr class='success'>";
                $reg['id_programa'];
                echo "<td>";
                echo $reg['nombre'];
                echo "</td>";
                echo "<td>";
                echo $reg['estadoo'];
                echo "</td>";
                echo "<td><a href='../../controlador/prueba.php?codigo=$reg[id_programa]&proaceptar=2'><button type='button' class='btn btn-warning'>Habilitar</button></a></td>";
                echo "<td><a href='../../controlador/prueba.php?codigo=$reg[id_programa]&pronoaceptar=2'><button type='button' class='btn btn-danger'>Deshabilitar</button></a></td>";
                }

                echo "</table>";


                    ?>