<?php
//CODIGO PARA ERROR QUE SALE EN LA CONEXION//PERO AL QUITARLA NO SERVIRIA NADA//
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);

include_once '../modelo/conexion.php';

class Usuario{
	public $id_usuario;
	public $documento;
	public $id_tipoDocumento;
	public $nombre;
	public $apellido;
	public $correo;
	public $telefono;
	public $contrasena;
	public $passadmin;
	public $passsuper;
	public $id_sede;
	public $id_programa;
	public $id_ficha;
	public $id_tipoUsuario;
	public $id_rol;
	public $id_estado;
	public $db;



//CONSTRUCTOR//
	public function __construct($documento, $id_tipoDocumento, $nombre, $apellido, $correo,$telefono, $contrasena,$passadmin,$passsuper, $id_sede, $id_programa, $id_ficha, $id_tipoUsuario, $id_rol, $id_estado){
		$this->id_usuario;
		$this->documento = $documento;
		$this->id_tipoDocumento = $id_tipoDocumento;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->correo = $correo;
		$this->telefono = $telefono;
		$this->contrasena = $contrasena;
		$this->passadmin = $passadmin;
		$this->passsuper = $passsuper;
		$this->id_sede = $id_sede;
		$this->id_programa = $id_programa;
		$this->id_ficha = $id_ficha;
		$this->id_tipoUsuario = $id_tipoUsuario;
		$this->id_rol = $id_rol;
		$this->id_estado = $id_estado;
		$this->db =new Conexion();
	}




//METODO insertarusuario//
	public function insertarusuario(){
				$db = new Conexion();
				$valido = $this->validardoc($this->documento);
				if ($valido) {
				echo '<script language="javascript">alert("Este documento ya esta registrado, porfavor intente con otro");location.href="../views/inicio/registro_aprendiz.php"</script>';
				} else {
				$sql_insertarusuario = "INSERT INTO usuario
				(documento,id_tipoDocumento,nombre,apellido,correo,telefono,contrasena,passadmin,passsuper,id_sede,id_programa,id_ficha,id_tipoUsuario,
				id_rol,id_estado)
				VALUES ('$this->documento','$this->id_tipoDocumento','$this->nombre','$this->apellido','$this->correo','$this->telefono','$this->contrasena','$this->passadmin','$this->passsuper','$this->id_sede','$this->id_programa','$this->id_ficha','$this->id_tipoUsuario','$this->id_rol','$this->id_estado')";
				$this->db->query($sql_insertarusuario);
				if($this->db->errno){
				die('<script language="javascript">alert("ERROR, NO SE HA PODIDO REGISTRAR DILIGENCIA BIEN LOS DATOS");location.href="../views/inicio/registro_aprendiz.php"</script>');
				}else{
				echo '<script language="javascript">alert("SE HA REGISTRADO CORRECTAMENTE, ENTRASTE A UN PROCESO DE SELECCION, EN UNOS DIAS TE CONFIRMARAN Y PODRAS ACCEDER A EL SISTEMA");';
				echo 'location.href ="../index.php"</script>';
			}
		}
}





//METODO imprimirusuario//
public function insertarsupervisor(){
			$db = new Conexion();
			$valido = $this->validardoc($this->documento);
			if ($valido){
			echo '<script language="javascript">alert("Este documento ya esta registrado, porfavor intente con otro");location.href="../views/directivo/agregarsup.php"</script>';
			} else {
			$sql_insertarsup = "INSERT INTO usuario
			(documento,id_tipoDocumento,nombre,apellido,correo,telefono,contrasena,passadmin,passsuper,id_sede,id_programa,id_ficha,id_tipoUsuario,
			id_rol,id_estado)
			VALUES ('$this->documento','$this->id_tipoDocumento','$this->nombre','$this->apellido','$this->correo','$this->telefono','$this->contrasena','$this->passadmin','$this->passsuper','$this->id_sede','$this->id_programa','$this->id_ficha','$this->id_tipoUsuario','$this->id_rol','$this->id_estado')";
			$this->db->query($sql_insertarsup);
			if($this->db->errno){
			die('<script language="javascript">alert("ERROR, NO SE HA PODIDO REGISTRAR EL SUPERVISOR");location.href="../views/directivo/agregarsup.php" </script>');
			}else{
			echo '<script language="javascript">alert("SE HA REGISTRADO CORRECTAMENTE UN NUEVO SUPERVISOR");';
			echo 'location.href ="../views/directivo/agregarsup.php"</script>';
			}
			}
}




	//METODO IMPRIMIR USUARIO//





		//INICIO METODO IMPRIMIR USUARIO//
	static function imprimirusuario($WHERE){
		$db = new Conexion();
		$sql = "SELECT usuario.id_usuario,usuario.documento, tipoDocumento.nombre as tipodedocumento, usuario.nombre, usuario.apellido, usuario.correo ,usuario.telefono,usuario.contrasena,usuario.passadmin,usuario.passsuper,sede.nombre as sede, programa.nombre as nombreprograma, ficha.nombre as ficha, tipoUsuario.nombre as programa, rol.nombre as rol, estado.nombre as estado FROM usuario
		INNER JOIN tipoDocumento on usuario.id_tipoDocumento=tipoDocumento.id_tipoDocumento
		INNER JOIN sede on usuario.id_sede=sede.id_sede
		INNER JOIN programa on usuario.id_programa=programa.id_programa
		INNER JOIN ficha on usuario.id_ficha=ficha.id_ficha
		INNER JOIN tipoUsuario on usuario.id_tipoUsuario=tipoUsuario.id_tipoUsuario
		INNER JOIN rol on usuario.id_rol=rol.id_rol
		INNER JOIN estado on usuario.id_estado=estado.id_estado
		$WHERE;";
		$datos=$db->query($sql);
		return $datos;
}




//metodo cambiarEstados
static function cambiarEstados($estado, $codigo){
		$db= new Conexion();
		$mensaje="ESTE APRENDIZ ESTA INACTIVO";
		if($estado==1){
		$mensaje="ESTE APRENDIZ QUEDO ACTIVO";
        }
    $sql="UPDATE usuario SET id_estado='$estado' WHERE id_usuario=$codigo";
    $db->query($sql);
	echo ' <script language="javascript">alert("'.$mensaje.'");</script> ';
	echo "<script>location.href='../views/directivo/Aprendicess.php'</script>";
}




//METODO VALIDARDOC//
static  function validardoc($documento){
		$db = new Conexion();
		$chek = "SELECT * FROM usuario WHERE documento='$documento'";
		$output_sql = $db->query($chek);
	    if ($output_sql->num_rows >= 1){
		$valido = true;
		}
		return $valido;
}






//METODO ACTUALIZACION DE EL ROL USUARIO//
static function updateuser($documento,$id_tipoDocumento,$nombre,$apellido,$correo,$telefono,$contrasena,$id_sede,$id_usuario){
										$db = new Conexion();
										$sql_upuser = "UPDATE usuario SET documento='$documento',
										id_tipoDocumento='$id_tipoDocumento',
										nombre='$nombre',
										apellido='$apellido',
										correo='$correo',
										telefono='$telefono',
										contrasena='$contrasena',
										id_sede='$id_sede'
										WHERE id_usuario='$id_usuario'";
				$db->query($sql_upuser);
				if($db->errno){
		    	die('<script language="javascript">alert("No se an podido actualizar los datos");location.href="../views/aprendiz/updateuser.php"</script>');
				}else{
				echo '<script language="javascript">alert("SE HA ACTUALIZADO CORRECTAMENTE");</script>';
				echo '<script>location.href="../index.php"</script>';
		}
}
//FIN METODO UPDATEUSER//

static function tipouser($WHERE){
$db = new Conexion();
$sql_up = "SELECT documento, id_tipoUsuario FROM usuario $WHERE";
$dat = $db->query($sql_up);
return $dat;

}

static function validatelogin($WHERE){
	$db = new Conexion();
	$sql_val = "SELECT * FROM usuario $WHERE";
	$dats = $db->query($sql_val);
	return $dats;
}







}//FIN CLASE USUARIO//
?>