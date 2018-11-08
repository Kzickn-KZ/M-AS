<?php
session_start();
class myDBC {
    public $mysqli = null;

    public function __construct() {

        include_once "dbconfig.php";
        $this->mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

        if ($this->mysqli->connect_errno) {
            echo "Error MySQLi: ("&nbsp. $this->mysqli->connect_errno.") " . $this->mysqli->connect_error;
            exit();
        }
        $this->mysqli->set_charset("utf8");
    }

    public function runQuery($qry) {
        $result = $this->mysqli->query($qry);
        return $result;
    }

    public function seleccionar_datos()
    {
        //$q = 'SELECT * from compras where id_usuario=63 and numeroventa=1';
        $q="SELECT  horas.id_horas, horas.documento, horas.fecha, horas.horas_realizadas, horas.descripcion,
        usuario.nombre as nombresupervisor, estado.nombre as nombreestado , horas.tok
        FROM  horas
        INNER JOIN usuario on horas.id_usuario=usuario.id_usuario
        INNER JOIN estado on horas.id_estado=estado.id_estado
        WHERE horas.documento='$_SESSION[documento]' and tok=0 ORDER BY horas.fecha ASC";

        $result = $this->mysqli->query($q);

        //Array asociativo que contendrá los datos
        $valores = array();

        if( $result->num_rows == 0)
        {
            echo'<script type="text/javascript">
                alert("ningun registro");location.href="../../views/aprendiz/horasregistradas.php";
                </script>';
        }

        else{

            while($row = mysqli_fetch_assoc($result))
            {
                //Se crea un arreglo asociativo
                array_push($valores, $row);
            }
        }
        //Regresa array asociativo
        return $valores;
    }

    public function seleccionar_datos2()
    {
        //$q = 'SELECT * from compras where id_usuario=63 and numeroventa=1';
        $q="SELECT novedades.id_novedades, tiponovedad.nombre as tipo, novedades.documento, novedades.fecha, novedades.descripcion, usuario.nombre as supervisor, estado.nombre as estado
		FROM novedades
		INNER JOIN tiponovedad on novedades.id_tipoNovedad=tiponovedad.id_tipoNovedad
		INNER JOIN usuario on novedades.id_usuario=usuario.id_usuario
		INNER JOIN estado on novedades.id_estado=estado.id_estado
		WHERE novedades.documento='$_SESSION[documento]'";

        $result = $this->mysqli->query($q);

        //Array asociativo que contendrá los datos
        $valores = array();

        if( $result->num_rows == 0)
        {
            echo'<script type="text/javascript">
                alert("ningun registro");location.href="../../views/aprendiz/vernovedad.php";
                </script>';
        }

        else{

            while($row = mysqli_fetch_assoc($result))
            {
                //Se crea un arreglo asociativo
                array_push($valores, $row);
            }
        }
        //Regresa array asociativo
        return $valores;
    }

    public function seleccionar_datos3()
    {
        //$q = 'SELECT * from compras where id_usuario=63 and numeroventa=1';
        $q="SELECT proyecto.id_proyecto, proyecto.documento, proyecto.fechainicio, proyecto.fechafinal, proyecto.nombre, proyecto.descripcion, usuario.nombre as nombresupervisor,estado.nombre as nombreestado
		FROM proyecto
		INNER JOIN usuario on proyecto.id_usuario=usuario.id_usuario
		INNER JOIN estado on proyecto.id_estado=estado.id_estado
		WHERE usuario.id_usuario='$_SESSION[id_usuario]'";

        $result = $this->mysqli->query($q);

        //Array asociativo que contendrá los datos
        $valores = array();

        if( $result->num_rows == 0)
        {
            echo'<script type="text/javascript">
                alert("ningun registro");location.href="../../views/supervisor/verproyectos.php";
                </script>';
        }

        else{

            while($row = mysqli_fetch_assoc($result))
            {
                //Se crea un arreglo asociativo
                array_push($valores, $row);
            }
        }
        //Regresa array asociativo
        return $valores;
    }

    public function seleccionar_datos4($usu)
    {
        //$q = 'SELECT * from compras where id_usuario=63 and numeroventa=1';
        $q="SELECT  horas.id_horas, horas.documento, horas.fecha, horas.horas_realizadas, horas.descripcion,
        usuario.nombre as nombresupervisor, estado.nombre as nombreestado , horas.tok
        FROM  horas
        INNER JOIN usuario on horas.id_usuario=usuario.id_usuario
        INNER JOIN estado on horas.id_estado=estado.id_estado
        WHERE usuario.id_usuario=$_SESSION[id_usuario] and  horas.documento='$usu' and tok=0";

        $result = $this->mysqli->query($q);

        //Array asociativo que contendrá los datos
        $valores = array();

        if( $result->num_rows == 0)
        {
            echo'<script type="text/javascript">
                alert("ningun registro");location.href="../../views/supervisor/inicio_supervisor.php";
                </script>';
        }

        else{

            while($row = mysqli_fetch_assoc($result))
            {
                //Se crea un arreglo asociativo
                array_push($valores, $row);
            }
        }
        //Regresa array asociativo
        return $valores;
    }


    public function seleccionar_datos5()
    {
        //$q = 'SELECT * from compras where id_usuario=63 and numeroventa=1';
        $q="SELECT proyecto.id_proyecto, proyecto.documento, proyecto.fechainicio, proyecto.fechafinal, proyecto.nombre, proyecto.descripcion, usuario.nombre as nombresupervisor,estado.nombre as nombreestado
		FROM proyecto
		INNER JOIN usuario on proyecto.id_usuario=usuario.id_usuario
		INNER JOIN estado on proyecto.id_estado=estado.id_estado
		";

        $result = $this->mysqli->query($q);

        //Array asociativo que contendrá los datos
        $valores = array();

        if( $result->num_rows == 0)
        {
            echo'<script type="text/javascript">
                alert("ningun registro");
                </script>';
        }

        else{

            while($row = mysqli_fetch_assoc($result))
            {
                //Se crea un arreglo asociativo
                array_push($valores, $row);
            }
        }
        //Regresa array asociativo
        return $valores;
    }




    public function seleccionar_datos6()
    {
        //$q = 'SELECT * from compras where id_usuario=63 and numeroventa=1';
        $q="SELECT usuario.id_usuario,usuario.documento, tipoDocumento.nombre as tipodedocumento, usuario.nombre, usuario.apellido, usuario.correo ,usuario.telefono,usuario.contrasena,usuario.passadmin,usuario.passsuper,sede.nombre as sede, programa.nombre as nombreprograma, ficha.nombre as ficha, tipoUsuario.nombre as programa, rol.nombre as rol, estado.nombre as estado FROM usuario
		INNER JOIN tipoDocumento on usuario.id_tipoDocumento=tipoDocumento.id_tipoDocumento
		INNER JOIN sede on usuario.id_sede=sede.id_sede
		INNER JOIN programa on usuario.id_programa=programa.id_programa
		INNER JOIN ficha on usuario.id_ficha=ficha.id_ficha
		INNER JOIN tipoUsuario on usuario.id_tipoUsuario=tipoUsuario.id_tipoUsuario
		INNER JOIN rol on usuario.id_rol=rol.id_rol
		INNER JOIN estado on usuario.id_estado=estado.id_estado
		WHERE rol.id_rol=1
		";

        $result = $this->mysqli->query($q);

        //Array asociativo que contendrá los datos
        $valores = array();

        if( $result->num_rows == 0)
        {
            echo'<script type="text/javascript">
                alert("ningun registro");
                </script>';
        }

        else{

            while($row = mysqli_fetch_assoc($result))
            {
                //Se crea un arreglo asociativo
                array_push($valores, $row);
            }
        }
        //Regresa array asociativo
        return $valores;
    }
}
?>