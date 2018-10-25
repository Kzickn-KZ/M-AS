<?php
//CODIGO PARA ERROR QUE SALE EN LA CONEXION//PERO AL QUITARLA NO SERVIRIA NADA//
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);

include_once '../modelo/conexion.php';

class Novedades{
	public $id_novedades;
	public $id_tipoNovedad;
	public $documento;
	public $fecha;
	public $descripcion;
	public $id_usuario;
	public $id_estado;
	public $db;

	public function __construct($id_tipoNovedad, $documento, $fecha, $descripcion,$id_usuario, $id_estado){
		$this->id_novedades;
		$this->id_tipoNovedad = $id_tipoNovedad;
		$this->documento = $documento;
		$this->fecha = $fecha;
		$this->descripcion = $descripcion;
		$this->id_usuario = $id_usuario;
		$this->id_estado = $id_estado;
		$this->db = new Conexion();
	}//FIN CONSTRUCTOR//







	public function insertarnovedad(){
					$db = new Conexion();
					$sql = "INSERT INTO novedades (id_tipoNovedad, documento, fecha, descripcion,id_usuario, id_estado)
					VALUES ('$this->id_tipoNovedad','$this->documento','$this->fecha','$this->descripcion','$this->id_usuario','$this->id_estado')";
					$this->db->query($sql);
					if($this->db->errno){
                	die('<script language="javascript">alert("NO SE PUDO REGISTRAR LA NOVEDAD, INTENTE DE NUEVO");location.href="../vista/aprendiz/novedad.php" </script>');
               	 	}else{
            		echo '<script language="javascript">alert("SE REGISTRO LA NOVEDAD, MUCHAS GRACIAS");';
            		echo 'location.href ="../vista/aprendiz/vernovedad.php"</script>';
					}
	}//FIN METODO insertarnovedad//







	static function imprimirnovedad($WHERE){
		$db = New Conexion();
		$sql_imprimir="SELECT novedades.id_novedades, tiponovedad.nombre as tipo, novedades.documento, novedades.fecha, novedades.descripcion, usuario.nombre as supervisor, estado.nombre as estado
		FROM novedades
		INNER JOIN tiponovedad on novedades.id_tipoNovedad=tiponovedad.id_tipoNovedad
		INNER JOIN usuario on novedades.id_usuario=usuario.id_usuario
		INNER JOIN estado on novedades.id_estado=estado.id_estado
		$WHERE";
		$datos=$db->query($sql_imprimir);
        return $datos;
	}//FIN METODO IMPRIMIR NOVEDAD//








	static function cambiestado($estado, $codigo){
			$db=new Conexion();
			$mensaje = "ESTA NOVEDAD HA QUEDADO RECHAZADA";
			if($estado==3){
			$mensaje= "ESTA NOVEDAD HA QUEDADO ACEPTADA";
			}
			$sql_i = ("UPDATE novedades SET id_estado='$estado' WHERE documento=$codigo");
			$datos=$db->query($sql_i);
			echo '<script language="javascript">alert("'.$mensaje.'")</script>';
			echo '<script>location.href="../vista/supervisor/novedadessup.php"</script>';
	}//FIN METODO CAMBIESTADO//






}//FIN CLASE Novedades//

?>