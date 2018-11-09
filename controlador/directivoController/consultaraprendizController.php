
            <center><br>
                <h3><strong>TABLA PARA CITAR APRENDICES</strong></h3>
                <em>(En esta tabla podra citar a el aprendiz seleccionado)</em></acronym>
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
                require("../../modelo/conexion.php");
                include '../../controlador/class.usuario.php';
                $query=Usuario::imprimirusuario("WHERE documento LIKE '%".$buscar."%' and usuario.id_estado=1 and rol.id_rol=1");
        echo '<div class="table-responsive">';
        echo '<table class="table">';
        echo  '<thead class="bg-danger">';
        echo '<tr>';
        echo '<th scope="col">Documento</th>';
        echo '<th scope="col">Nombre</th>';
        echo '<th scope="col">Apellido</th>';
        echo '<th scope="col">Sede</th>';
        echo '<th scope="col">Programa</th>';
        echo '<th scope="col">Ficha</th>';
        echo '<th scope="col">Tipo de usuario</th>';
        echo '<th scope="col">Citar</th>';
        echo '</tr>';
        echo '</thead>';
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
                echo "<td>$arreglo[10]</td>";
                echo "<td>$arreglo[11]</td>";
                echo "<td>$arreglo[12]</td>";
                echo "<td>$arreglo[13]</td>";
                echo "<td><a href='citacion.php?id=$arreglo[0]'><button type='button' class='btn btn-info'>Citar</button></a></td>";
        }
        echo "</table>";
    ?>
