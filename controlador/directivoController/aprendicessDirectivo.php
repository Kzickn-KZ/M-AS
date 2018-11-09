<center><br>
                <h3><strong>TABLA PARA VER LOS APRENDICES ACEPTADOS</strong></h3>
                <em>(Aprendices aceptados puede cambiar el estado )</em>
                    <div id="pdfico">
                <a href="../../assets/pdf/creaPDF6.php"><img src="../../assets/img/pdf.png" style="Width:15%;"></a>
                <img src="../../assets/img/ex.png" style="Width:15%;">
                    </div>
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
                include_once'../../controlador/class.usuario.php';
                $buscar=$_POST['T1'];
                $sql = Usuario::imprimirusuario("WHERE documento LIKE '%".$buscar."%' and rol.id_rol=1");
        echo '<div class="table-responsive table-hover">';
        echo '<table class="table">';
        echo  '<thead class="bg-danger">';
        echo '<tr>';
        echo '<th scope="col">Documento</th>';
        echo '<th scope="col">Correo</th>';
        echo '<th scope="col">Telefono</th>';
        echo '<th scope="col">Sede</th>';
        echo '<th scope="col">Ficha</th>';
        echo '<th scope="col">Programa</th>';
        echo '<th scope="col">Tipo de usuario</th>';
        echo '<th scope="col">Estado</th>';
        echo '<th scope="col">Habilitar</th>';
        echo '<th scope="col">Inhabilitar</th>';
        echo '</tr>';
        echo '</thead>';
                    while ($arreglo= mysqli_fetch_array($sql)) {

                        echo "<tr class='success'>";
                        $arreglo[0];
                        echo "<td>$arreglo[1]</td>";
                        //echo "<td>$arreglo[2]</td>";
                        //echo "<td>$arreglo[3]</td>";
                        //echo "<td>$arreglo[4]</td>";
                        echo "<td>$arreglo[5]</td>";
                        echo "<td>$arreglo[6]</td>";
                        echo "<td>$arreglo[10]</td>";
                        echo "<td>$arreglo[ficha]</td>";
                        echo "<td>$arreglo[11]</td>";
                        echo "<td>$arreglo[13]</td>";
                        echo "<td>$arreglo[estado]</td>";
                        //echo "<td>$arreglo[9]</td>";
                        //echo "<td>$arreglo[12]</td>";

                        echo "<td><a href='../../controlador/prueba.php?codigo=$arreglo[0]&usuha=2'><button type='button' class='btn btn-danger'>Habilitar</button></a></td>";
                        echo "<td><a href='../../controlador/prueba.php?codigo=$arreglo[0]&usuin=2'><button type='button' class='btn btn-warning'>Inhabilitar</button></a></td>";
                    }

                    echo "</table>";
                    ?>
