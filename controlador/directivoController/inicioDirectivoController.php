<div class="box" id="contenido">
            <center>

                <h3><strong>TABLA PARA ACEPTAR APRENDICES</strong></h3>
                <em>(En esta tabla podra ver los aprendices que solicitaron entrar a alguno de los programas, al hacer
                    click en la lupa podra ver toda la informacion y aceptarlos)</em></acronym><br><br>
                    <form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="cdr" >
                    <p><input name="T1"  type="text" style="width:30%; height:5%" class="form-control" size="20"></p>
                    <input  name="buscar" type="submit" id="buscar" value="buscar" class="btn btn-lg btn-primary btn-block btn-sm" style="width: 100px"/>
                            </form>
                <?php
                ini_set('display_errors','off');
                ini_set('display_startup_errors','off');
                error_reporting(0);
                include_once '../../controlador/class.usuario.php';
                include_once '../../modelo/conexion.php';
                $query = Usuario::imprimirusuario("Where rol.id_rol=1 and estado.id_estado=5");
                echo '<div class="datagrid" style="width:37%">';
                echo '<table  id="horas" >';
                echo'<thead>';
                echo "<th>Documento</th>";
                //echo "<th>Tipo de documento</th>";
                echo "<th>Nombre</th>";
                echo "<th>Apellido</th>";
                //echo "<th>Telefono</th>";
                //echo "<th>Sede</th>";
                //echo "<th>Programa</th>";
                //echo "<th>Ficha</th>";
                //echo "<th>Tipo</th>";
                //echo "<th>Rol</th>";
                echo "<th>Estado</th>";
                echo "<th>Mirar</th>";
                    ?>
                <?php
        while($arreglo=mysqli_fetch_array($query)){
                echo "<tr class='success'>";
            $arreglo[0];
            echo "<td>$arreglo[1]</td>";
            //echo "<td>$arreglo[2]</td>";
            echo "<td>$arreglo[3]</td>";
            echo "<td>$arreglo[4]</td>";
            //echo "<td>$arreglo[5]</td>";
            //echo "<td>$arreglo[6]</td>";
            //echo "<td>$arreglo[7]</td>";
            //echo "<td>$arreglo[8]</td>";
            //echo "<td>$arreglo[9]</td>";
            //echo "<td>$arreglo[10]</td>";
            echo "<td>$arreglo[11]</td>";
            echo "<td><a href='../../vista/directivo/observar.php?codigo=$arreglo[0]'><span class='glyphicon glyphicon-eye-open'></a></td>";
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