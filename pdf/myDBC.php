<?php
 
class myDBC {
    public $mysqli = null;
 
    public function __construct() {
 
        include_once "dbconfig.php";
        $this->mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
 
        if ($this->mysqli->connect_errno) {
            echo "Error MySQLi: ("&nbsp. $this->mysqli->connect_errno.") " . $this->mysqli->connect_error;
            exit();
        }
        $this->mysqli->set_charset("utf8");
    }
 
 
    public function runQuery($qry) {
        $result = $this->mysqli->query($qry);
        return $result;
    }
 
    public function seleccionar_datos($id,$ventas)
    {
        //$q = 'SELECT * from compras where id_usuario=63 and numeroventa=1';
        $q="SELECT com.Id,re.Documento as id_usuario, com.numeroventa, com.fecha, com.hora, com.id_producto, com.precio, com.cantidad, com.subtotal
                              
       FROM compras  com
       INNER JOIN registro  re ON re.codigo= com.id_usuario 
       WHERE com.id_usuario=$id and com.numeroventa=$ventas";
 
        $result = $this->mysqli->query($q);
 
        //Array asociativo que contendrá los datos
        $valores = array();
 
        if( $result->num_rows == 0)
        {
            echo'<script type="text/javascript">
                alert("ningun registro");
                </script>';
        }
 
        else{
 
            while($row = mysqli_fetch_assoc($result))
            {
                //Se crea un arreglo asociativo
                array_push($valores, $row);
            }
        }
        //Regresa array asociativo
        return $valores;
    }
}
?>