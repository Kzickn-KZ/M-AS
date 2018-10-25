<div class="box" id="contenido">
            <center>

                <h3><strong>TABLA PARA VER LOS APRENDICES ACEPTADOS</strong></h3>
                <em>(Podra ver a los aprendices que presentan alguno de los 2 programas, y cambiarles el estado por si
                    ocurre una novedad)</em></acronym>
                    <div id="pdfico">
                <img src="../../img/pdf.png" style="Width:20%;">
                </div><br><br>
                    <form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="cdr" >
                    <p><input name="T1"  type="text" style="width:30%; height:5%" class="form-control" size="20"></p>
                    <input  name="buscar" type="submit" id="buscar" value="buscar" class="btn btn-lg btn-primary btn-block btn-sm" style="width: 100px"/>
                            </form>

                <?php
                include_once'../../modelo/Conexion.php';
                include_once'../../controlador/class.usuario.php';
                $buscar=$_POST['T1'];
                $sql = Usuario::imprimirusuario("WHERE rol.id_rol=1");
                echo '<div class="datagrid" style="width:78%">';
                echo '<table  id="horas" >';
                echo'<thead>';
                echo "<th>Documento</th>";
                //echo "<th>Tipo de documento</th>";
                //echo "<th>Nombre</th>";
                echo "<th>Correo</th>";
                echo "<th>Telefono</th>";
                //echo "<th>contraseña</th>";
                echo "<th>Sede</th>";
                echo "<th>Programa</th>";
                //echo "<th>Ficha</th>";
                echo "<th>Ficha</th>";
                //echo "<th>Rol</th>";
                echo "<th>Programa</th>";
                echo "<th>Estado</th>";

                echo "<th>Habilitar</th>";
                echo "<th>Inhabilitar</th>";

                    ?>
                <?php

                    while ($arreglo= mysqli_fetch_array($sql)) {

                        echo "<tr class='success'>";
                        $arreglo[0];
                        echo "<td>$arreglo[1]</td>";
                        //echo "<td>$arreglo[2]</td>";
                        //echo "<td>$arreglo[3]</td>";
                        //echo "<td>$arreglo[4]</td>";
                        echo "<td>$arreglo[5]</td>";
                        echo "<td>$arreglo[6]</td>";
                        //echo "<td>$arreglo[7]</td>";
                        echo "<td>$arreglo[8]</td>";
                        echo "<td>$arreglo[9]</td>";
                        echo "<td>$arreglo[10]</td>";
                        echo "<td>$arreglo[11]</td>";
                        //echo "<td>$arreglo[12]</td>";
                        echo "<td>$arreglo[13]</td>";

                        echo "<td><a href='../../controlador/prueba.php?codigo=$arreglo[0]&usuha=2'><span class='glyphicon glyphicon-ok'></a></td>";
                        echo "<td><a href='../../controlador/prueba.php?codigo=$arreglo[0]&usuin=2'><span class='glyphicon glyphicon-remove'></a></td>";


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