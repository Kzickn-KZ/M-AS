<?php
include_once '../modelo/conexion.php';
class sede{
	public $id_sede;
	public $nombre;
	public $db;


	public function __construct(){
		$this->id_sede;
		$this->nombre = $nombre;
		$this->db = new Conexion();
	}//FIN CONSTRUCTOR//





	static function imprimirsede($WHERE){
		$db = new Conexion();
		$sql = "SELECT id_sede,nombre FROM sede $WHERE";
		$datos = $db->query($sql);
		return $datos;
	}
}//FIN CLASE//
?>