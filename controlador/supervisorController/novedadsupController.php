
            <center><br>
                <h3><strong>TABLA DE NOVEDADES DE APRENDICES</strong></h3>
                <em>(podra ver las novedades que le hacen los aprendices)<br></em>
                <br>
    <?php
    include_once'../../modelo/Conexion.php';
        include_once'../../controlador/class.notificar.php';
        $sql = Novedades::imprimirnovedad("WHERE novedades.id_usuario='$_SESSION[id_usuario]'");
        echo '<div class="table-responsive table-hover">';
        echo '<table class="table">';
        echo  '<thead class="bg-danger">';
        echo '<tr>';
        echo '<th scope="col">Tipo novedad</th>';
        echo '<th scope="col">Documento</th>';
        echo '<th scope="col">Fecha Realizadas</th>';
        echo '<th scope="col">Descripcion</th>';
        echo '<th scope="col">Estado</th>';
        echo '<th scope="col">Rechazar</th>';
        echo '<th scope="col">Aceptar</th>';
        echo '</tr>';
        echo '</thead>';
    while($arreglo=mysqli_fetch_array($sql)){
        echo "<tr class='success'>";
        $arreglo[0];
        echo "<td>$arreglo[1]</td>";
        echo "<td>$arreglo[2]</td>";
        echo "<td>$arreglo[3]</td>";
        echo "<td>$arreglo[4]</td>";
        //echo "<td>$arreglo[5]</td>";
        echo "<td>$arreglo[6]</td>";

        echo "<td><a href='../../controlador/prueba.php?codigo=$arreglo[0]&estadox=2'><button type='button' class='btn btn-danger'>Rechazar</button></a></td>";
        echo "<td><a href='../../controlador/prueba.php?codigo=$arreglo[0]&estadoy=2'><button type='button' class='btn btn-warning'>Aceptar</button></a></td>";


        echo "</tr>";


    }
    echo "</table>"
    ?>
            <br></center>
