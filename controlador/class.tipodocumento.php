<?php
include_once '../modelo/conexion.php';
class Tipodocumento{
	public $id_tipoDocumento;
	public $nombre;
	public $db;
	public function __construct(){
	$this->id_tipoDocumento;
	$this->nombre = $nombre;
	$this->db = new Conexion();
	}//FIN CONSTRUCTOR//
	static function imprimir($WHERE){
	$db = new Conexion();
	$sql = "SELECT id_tipoDocumento,nombre FROM tipodocumento $WHERE";
	$datos = $db->query($sql);
	return $datos;
	}//FIN FUNCION IMPRIMIR//
}//FIN CLASE//
?>