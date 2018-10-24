<?php
include_once '../modelo/conexion.php';
class Programa{
	public $id_programa;
	public $nombre;
	public function __construct(){
	$this->id_programa;
	$this->nombre = $nombre;
	}//FIN CONTRUCTOR//
	static function imprimirprograma($WHERE){
	$db = new Conexion();
	$sql = "SELECT id_programa,nombre FROM programa $WHERE";
	$datos = $db->query($sql);
	return $datos;
	}
}//FIN CLASE//
?>