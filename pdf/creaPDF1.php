<?php
include_once('PDF1.php');
include_once('myDBC.php');
  $id=$_GET["id"];
 $ventas=$_GET["ventas"];


$seleccion = new myDBC();
 

 $fecha= " Fecha: ".date("d") . "/" . date("m") . "/" . date("Y");
 
$pdf=new PDF('L','mm','A3');
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,$fecha,0,1,'R');  
$pdf->header();


 
$datosReporte = $seleccion->seleccionar_datos($id,$ventas);

$miCabecera = array( 'id', 'id_usuario', 'numeroventa','fecha','hora','id_producto','precio' , 'cantidad', 'subtotal');
 
$pdf->tablaVertical($miCabecera, $datosReporte);
$pdf->footer(); 
$pdf->Output(); //Salida al navegador

?>

