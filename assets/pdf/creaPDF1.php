<?php
include_once('PDF1.php');
include_once('myDBC.php');

$seleccion = new myDBC();
$fecha= " Fecha: ".date("d") . "/" . date("m") . "/" . date("Y");

$pdf=new PDF('L','mm','A3');
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,5,$fecha,0,1,'C');
$pdf->header();



$datosReporte = $seleccion->seleccionar_datos();
$miCabecera = array( 'Documento', 'Fecha', 'Horas realizadas','Descripcion','Supervisor a cargo','Estado');

$pdf->tablaVertical($miCabecera, $datosReporte);
$pdf->Output(); //Salida al navegador

?>

