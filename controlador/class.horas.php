<?php
//CODIGO PARA ERROR QUE SALE EN LA CONEXION//PERO AL QUITARLA NO SERVIRIA NADA//
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);


include_once '../modelo/Conexion.php';

class Horas{
	public $id_horas;
	public $documento;
	public $fecha;
	public $horas_realizadas;
	public $descripcion;
	public $id_usuario;
	public $id_estado;
	public $tok;
	public $db;

	//inicio constructor//
	public function __construct($documento,$fecha,$horas_realizadas,$descripcion,$id_usuario,$id_estado,$tok){
		$this->documento = $documento;
		$this->fecha = $fecha;
		$this->horas_realizadas = $horas_realizadas;
		$this->descripcion = $descripcion;
		$this->id_usuario = $id_usuario;
		$this->id_estado = $id_estado;
		$this->tok = $tok;
		$this->db=new Conexion();
	}//fin constructor//





	//inicio metodo insertarhoras//
	public function insertarhoras(){
				$db = new Conexion();
				$sql = "INSERT INTO horas(documento,fecha,horas_realizadas,descripcion,id_usuario,id_estado,tok)
        		VALUES ('$this->documento','$this->fecha','$this->horas_realizadas',
        		'$this->descripcion','$this->id_usuario','$this->id_estado','$this->tok');";
				$this->db->query($sql);
				if($this->db->errno){
                die('<script language="javascript">alert("NO SE PUDO REGISTRAR LAS HORAS");location.href="../vista/aprendiz/iniciousu.php" </script>');
                }else{
            	echo '<script language="javascript">alert("SE REGISTRARON LAS HORAS CORRECTAMENTE");';
            	echo 'location.href ="../vista/aprendiz/horasregistradas.php"</script>';
					}
	}//fin metodo insertarhoras//







	//inicio metodo inprimirHoras//
	static function imprimirHoras($WHERE){
       	 	$db = new Conexion();
            $sql="SELECT  horas.id_horas, horas.documento, horas.fecha, horas.horas_realizadas, horas.descripcion,
            usuario.nombre as nombresupervisor, estado.nombre as nombreestado , horas.tok
            FROM  horas
            INNER JOIN usuario on horas.id_usuario=usuario.id_usuario
            INNER JOIN estado on horas.id_estado=estado.id_estado
            $WHERE;";
            $datos=$db->query($sql);
            return $datos;
}//FIN FUNCION inprimirHoras//






static function cambiarEstado($estado, $codigo){
            $db = new Conexion();
            $mensaje="ESTAS HORAS HAN SIDO RECHAZADAS";
            if($estado==3){
            $mensaje="ESTAS HORAS HAN SIDO ACEPTADAS";
            }
        $sqlborrar=("UPDATE horas set id_estado='$estado' where id_horas=$codigo");
        $datos=$db->query($sqlborrar);
        echo ' <script language="javascript">alert("'.$mensaje.'");</script> ';
    	echo "<script>location.href='../vista/supervisor/inicio_supervisor.php'</script>";
}//FIn metodo cambiarEstado//






static function sumadehoras($WHERE){
		$db = new Conexion();
		$sql = "SELECT SUM(horas_realizadas) as horitas , id_estado , tok FROM horas $WHERE";
		$datos = $db->query($sql);
		return $datos;
}//FIN METODO SUMADEHORAS//






static function cambiartok($tok, $codigo){
			$db = new Conexion();
			$mensaje="TOK ACEPTADO";
			if($estado==1){
			$mensaje="TOK RECHAZADO";
			}
		$sqlborrar=("UPDATE horas set tok='$tok' where documento=$codigo");
		$datos=$db->query($sqlborrar);
		echo ' <script language="javascript">alert("'.$mensaje.'");</script> ';
		echo "<script>location.href='../vista/directivo/horasadmin.php'</script>";
}

} //fin class horas//
?>