<?php
//CODIGO PARA ERROR QUE SALE EN LA CONEXION//PERO AL QUITARLA NO SERVIRIA NADA//
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);

include_once '../modelo/conexion.php';

class Programa{
	public $id_programa;
	public $nombre;
	public $id_estado;
	public $db;

	public function __construct($nombre, $id_estado){
			$this->id_programa;
			$this->nombre = $nombre;
			$this->id_estado = $id_estado;
			$this->db = new Conexion();
}//FIN CONTRUCTOR//

public function insertarPrograma(){

	$sql_ins = "INSERT INTO programa(nombre, id_estado) VALUES ('$this->nombre','$this->id_estado')";
	$this->db->query($sql_ins);
	if($this->db->errno){
		die('<script language="javascript">alert("NO");location.href="../views/directivo/agregarprograma.php"</script>');
	}else{
		echo '<script language="javascript">alert("SI");location.href="../views/directivo/agregarprograma.php"</script>';
	}
	}//FIN METODO INSERTAR PROGRAMA//


	static function imprimirprograma($WHERE){
		$db = new Conexion();
		$sql = "SELECT programa.id_programa,programa.nombre,estado.nombre as estadoo
		FROM programa
		INNER JOIN estado on programa.id_estado=estado.id_estado
		$WHERE";
		$datos = $db->query($sql);
		return $datos;
	}

	static function cambiestado($estado, $codigo){
		$mensaje="SE CAMBIO A INACTIVO";
		if($estado==1){
		$mensaje = "SE CAMBIO A ACTIVO";
		}
		$db = new Conexion();
		$sql_dat = "UPDATE programa set id_estado='$estado' WHERE id_programa='$codigo'";
		$db->query($sql_dat);
		echo '<script language="javascript">alert("'.$mensaje.'");</script>';
		echo '<script>location.href="../views/directivo/agregarprograma.php"</script>';


	}
}//FIN CLASE//
?>