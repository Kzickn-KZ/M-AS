<?php
include_once('PDF6.php');
include_once('myDBC.php');

$seleccion = new myDBC();
$fecha= " Fecha: ".date("d") . "/" . date("m") . "/" . date("Y");

$pdf=new PDF('L','mm','A3');
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,5,$fecha,0,1,'C');
$pdf->header();



$datosReporte = $seleccion->seleccionar_datos6();
$miCabecera = array( 'Documento', 'Correo', 'Telefono','Sede','Ficha','Programa','Tipo de usuario','estado');

$pdf->tablaVertical($miCabecera, $datosReporte);
$pdf->Output(); //Salida al navegador

?>