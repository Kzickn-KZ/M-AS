<?php
//CODIGO PARA ERROR QUE SALE EN LA CONEXION//PERO AL QUITARLA NO SERVIRIA NADA//
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);

include_once '../modelo/conexion.php';
//CLASE//
class Proyecto{
	public $id_proyecto;
	public $documento;
	public $fechainicio;
	public $fechafinal;
	public $nombre;
	public $descripcion;
	public $id_usuario;
	public $id_estado;
	public $db;

	//CONSTRUCTOR//
	public function __construct($documento,$fechainicio,$fechafinal,$nombre,$descripcion,$id_usuario,$id_estado){
		$this->id_proyecto;
		$this->documento = $documento;
		$this->fechainicio = $fechainicio;
		$this->fechafinal = $fechafinal;
		$this->nombre = $nombre;
		$this->descripcion = $descripcion;
		$this->id_usuario = $id_usuario;
		$this->id_estado = $id_estado;
		$this->db = new Conexion();
	}//FIN CONSTRUCTOR//








	//METODO DE INSERTAR DATOS//
	public function insertarproyecto(){
			$db = new Conexion();
			$sql = "INSERT INTO proyecto (documento, fechainicio, fechafinal, nombre, descripcion, id_usuario, id_estado)
			VALUES ('$this->documento','$this->fechainicio','$this->fechafinal','$this->nombre','$this->descripcion','$this->id_usuario','$this->id_estado')";
			$this->db->query($sql);
			if ($this->db->errno) {
			die('<script language="javascript">alert("NO SE HA PODIDO AÑADIR PROYECTO");location.href="../views/aprendiz/proyecto.php"</script>');
			}else{
			echo '<script language="javascript">alert("SE REGISTRO EL PROYECTO CORRECTAMENTE");';
			echo 'location.href="../views/aprendiz/proyecto.php"</script>';
		}
	}//FIN METODO INSERTAR PROYECTO//








	//METODO DE IMPRIMIR PROYECTO//
	static function verproyectos($WHERE){
		$db = new Conexion();
		$sql = "SELECT proyecto.id_proyecto, proyecto.documento, proyecto.fechainicio, proyecto.fechafinal, proyecto.nombre, proyecto.descripcion, usuario.nombre as nombresupervisor,estado.nombre as nombreestado
		FROM proyecto
		INNER JOIN usuario on proyecto.id_usuario=usuario.id_usuario
		INNER JOIN estado on proyecto.id_estado=estado.id_estado
		$WHERE";
		$datos=$db->query($sql);
        return $datos;
	}//FIN METODO VER PROYECTOS//








	//METODO CAMBIAR ESTADO//
	static function cambiarestado($estado, $codigo){
			$db = new Conexion();
			$mensaje="ESTE PROYECTO SE A CAMBIADO A INACTIVO";
        	if($estado==1){
        	$mensaje="ESTE PROYECTO SE A CAMBIADO A ACTIVADO";
        	}
			$sql="UPDATE proyecto SET id_estado='$estado' WHERE id_proyecto=$codigo";
			$db->query($sql);
       	 	echo ' <script language="javascript">alert("'.$mensaje.'");</script> ';
        	echo "<script>location.href='../views/supervisor/verproyectos.php'</script>";
	}//FIN METODO CAMBIAR ESTADO







	//METODO IMPRIMIR NOMBRE Y ESTADO//
	static function nomest($WHERE){
		$db = New Conexion();
		$sql = "SELECT proyecto.nombre, estado.nombre as estadoo
		FROM proyecto
		INNER JOIN estado on proyecto.id_estado=estado.id_estado
		$WHERE";
		$envio=$db->query($sql);
		return $envio;
	}//FIN METODO NOMEST






//FUNCION VER PROYECTOS REGISTRADOS//
	static function printrow($WHERE){
		$db = new Conexion();
		$sql_chek = "SELECT * FROM proyecto $WHERE";
		$dat = $db->query($sql_chek);
		return $dat;
	}//FIN METODO PRINTROW//





	
}//FIN CLAS PROYECTO//
?>