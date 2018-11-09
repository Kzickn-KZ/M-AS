<?php
//CODIGO PARA ERROR QUE SALE EN LA CONEXION//PERO AL QUITARLA NO SERVIRIA NADA//
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);

include_once '../modelo/conexion.php';

class ficha{
	public $id_ficha;
	public $nombre;
	public $id_estado;
	public $db;


	public function __construct($nombre, $id_estado){
		$this->id_ficha;
		$this->nombre = $nombre;
		$this->id_estado = $id_estado;
		$this->db = new Conexion();
	}//FIN CONSTRUCT//




	public function insertarficha(){
			$sql = "INSERT INTO ficha (nombre, id_estado) VALUES ('$this->nombre','$this->id_estado')";
			$this->db->query($sql);
			if ($this->db->errno) {
			die ('<script language="javascript">alert("NO SE HA PODIDO REGISTRAR LA FICHA");location.href="../views/agregarficha.php"</script>');
			}else{
			echo '<script language="javascript">alert("SE HA REGISTRADO LA FICHA CORRECTAMENTE");';
			echo 'location.href="../views/directivo/agregarficha.php"</script>';
		}
	}//FIN METODO insertarficha//





static function imprimirficha($WHERE){
		$db = new Conexion();
		$sql = "SELECT ficha.id_ficha, ficha.nombre, estado.nombre as estadoo
		FROM ficha
		INNER JOIN estado on ficha.id_estado=estado.id_estado
		$WHERE";
		$datos = $db->query($sql);
		return $datos;
}//FIN metodo imprimirficha//





static function cambiarestado($estado, $codigo){
				$db = new Conexion();
				$mensaje="ESTA FICHA HA QUEDADO DESHABILITADA";
           	 	if($estado==1){
            	$mensaje="ESTA FICHA HA QUEDADO HABILITADA";
            	}
				$sql="UPDATE ficha SET id_estado='$estado' WHERE id_ficha=$codigo";
       		 $db->query($sql);
       		 echo ' <script language="javascript">alert("'.$mensaje.'");</script> ';
        	echo "<script>location.href='../views/directivo/agregarficha.php'</script>";
}//fin metodo cambiarestado//
}//FIN CLASE//
?>