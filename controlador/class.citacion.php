<?php
//CODIGO PARA ERROR QUE SALE EN LA CONEXION//PERO AL QUITARLA NO SERVIRIA NADA//
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);
include_once '../modelo/conexion.php';
class Citacion{
public $id_citacion;
public $id_usuario;
public $citador;
public $fecha;
public $hora;
public $id_sede;
public $ambiente;
public $db;
public function __construct($id_usuario,$citador, $fecha, $hora, $id_sede, $ambiente){
$this->id_citacion;
$this->id_usuario = $id_usuario;
$this->citador = $citador;
$this->fecha = $fecha;
$this->hora = $hora;
$this->id_sede = $id_sede;
$this->ambiente = $ambiente;
$this->db = new Conexion();
}//FIN CONSTRUCTOR//
public function insertarcitacion(){
	$db = new Conexion();
	$sql = "INSERT INTO citacion (id_usuario,citador, fecha, hora, id_sede, ambiente)
	VALUES ('$this->id_usuario','$this->citador',  '$this->fecha', '$this->hora', '$this->id_sede', '$this->ambiente')";
	$this->db->query($sql);
		if($this->db->errno){
			die('<script language="javascript">alert("ERROR NO SE A PODIDO ALMECENAR LA CITACION")location.href="../vista/citacion.php;" </script>');
		}else{
			echo '<script language="javascript">alert("SE HA CITADO A EL APRENDIZ CORRECTAMENTE");';
			echo 'location.href ="../vista/directivo/consultar_aprendiz.php"</script>';
		}
}//FIN FUNCION DE INSERTAR//
static function veraprendicescitados($WHERE){
	$db = new Conexion();
	$sql_ver = "SELECT citacion.id_citacion, citacion.citador, usuario.documento as usuario, citacion.fecha, citacion.hora, sede.nombre as seedee, citacion.ambiente
FROM citacion
	INNER JOIN usuario on citacion.id_usuario=usuario.id_usuario
	INNER JOIN sede on citacion.id_sede=sede.id_sede
	$WHERE";
	$datos=$db->query($sql_ver);
    return $datos;
}//FIN METODO DE VER APRENDICES
static function eliminar($codigo){
	$db = new Conexion();
	$sql = "DELETE FROM citacion WHERE id_citacion=$codigo";
		$db->query($sql);
		if ($db->errno) {
			die('<script language="javascript">alert("NO SE PUDO ELIMINAR");location.href="../vista/directivo/tablacitaciones.php"</script>');
		}else{
			echo '<script language="javascript">alert("SE HA ELIMINADO CORRECTAMENTE");</script>';
			echo '<script>location.href="../vista/directivo/tablacitaciones.php"</script>';
		}
}
}//FIN CLASE CITACION//
?>