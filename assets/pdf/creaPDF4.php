<?php
//CODIGO PARA ERROR QUE SALE EN LA CONEXION//PERO AL QUITARLA NO SERVIRIA NADA//
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);

include_once('PDF4.php');
include_once('myDBC.php');
$usu = $_GET['codigo'];

$seleccion = new myDBC();
$fecha= " Fecha: ".date("d") . "/" . date("m") . "/" . date("Y");

$pdf=new PDF('L','mm','A3');
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,5,$fecha,0,1,'C');
$pdf->header();



$datosReporte = $seleccion->seleccionar_datos4($usu);
$miCabecera = array( 'Documento', 'Fecha', 'Horas realizadas','Supervisor a cargo','Estado','Descripcion');

$pdf->tablaVertical($miCabecera, $datosReporte);
$pdf->Output(); //Salida al navegador

?>