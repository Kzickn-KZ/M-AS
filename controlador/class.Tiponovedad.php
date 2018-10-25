<?php
	include_once '../controlador/conexion.php';
	class Tiponovedad{
	public $id_tipoNovedad;
	public $nombre;


	public function __construct(){
		$this->id_tipoNovedad;
		$this->nombre = $nombre;
	}//FIN CONSTRUCTOR//



	static function imprimirnovedad($WHERE){
		$db = new Conexion();
		$sql = "SELECT id_tipoNovedad,nombre FROM tiponovedad $WHERE";
		$datos = $db->query($sql);
		return $datos;
	}
	}//FIN //
?>