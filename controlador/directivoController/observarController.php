<div class="box" id="contenido">
            <center>

                <h3><strong>TABLA PARA ACEPTAR APRENDICES</strong></h3>
                <em>(En esta tabla podra ver los aprendices que solicitaron entrar a alguno de los programas, al hacer
                    click en la lupa podra ver toda la informacion y aceptarlos)</em></acronym><br><br>

                <?php

require_once '../../controlador/class.usuario.php';
require_once '../../modelo/conexion.php';
$conexion = new Conexion();
$query = Usuario::imprimirusuario("Where usuario.id_usuario='$_GET[codigo]'");
while ($reg=$query->fetch_array())
{
echo '<br>';
echo '<strong>';
echo 'Documento: ';
echo '</strong>';
echo $reg['documento'];
echo '<br>';
echo '<br>';
echo '<strong>';
echo 'Tipo de documento: ';
echo '</strong>';
echo $reg['tipodedocumento'];
echo '<br>';
echo '<br>';
echo '<strong>';
echo 'Nombre: ';
echo '</strong>';
echo $reg['nombre'];
echo '<br>';
echo '<br>';
echo '<strong>';
echo 'Apellido: ';
echo '</strong>';
echo $reg['apellido'];
echo '<br>';
echo '<br>';
echo '<strong>';
echo 'Telefono: ';
echo '</strong>';
echo $reg['correo'];
echo '<br>';
echo '<br>';
echo '<strong>';
echo 'Telefono: ';
echo '</strong>';
echo $reg['telefono'];
echo '<br>';
echo '<br>';
echo '<strong>';
echo 'Sede: ';
echo '</strong>';
echo $reg['sede'];
echo '<br>';
echo '<br>';
echo '<strong>';
echo 'Programa: ';
echo '</strong>';
echo $reg['nombreprograma'];
echo '<br>';
echo '<br>';
echo '<strong>';
echo 'Ficha: ';
echo '</strong>';
echo $reg['ficha'];
echo '<br>';
echo '<br>';
echo '<strong>';
echo 'Tipo De Usuario: ';
echo '</strong>';
echo $reg['programa'];
echo '<br>';
echo '<br>';
echo "<td><a href='../../controlador/prueba.php?codigo=$_GET[codigo]&codigohabilitar=2'><img src='../../img/aceptar.png' class='img-rounded'/></a></td>";
}
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