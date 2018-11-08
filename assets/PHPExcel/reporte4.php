<?php
session_start();
require 'classes/PHPExcel.php';
require '../../modelo/Conexion.php';
$mysqli = new Conexion();

$sql = "SELECT novedades.id_novedades, tiponovedad.nombre as tipo, novedades.documento, novedades.fecha, novedades.descripcion, usuario.nombre as supervisor, estado.nombre as estado
FROM novedades
INNER JOIN tiponovedad on novedades.id_tipoNovedad=tiponovedad.id_tipoNovedad
INNER JOIN usuario on novedades.id_usuario=usuario.id_usuario
INNER JOIN estado on novedades.id_estado=estado.id_estado
WHERE novedades.documento='$_SESSION[documento]'";
$resultado = $mysqli->query($sql);

$fila = 2;

$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()->setCreator("Monitorias y apoyo de sostenimiento SENA")->setDescription("Reporte de novedades");

$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle("novedades aprendiz");


$objPHPExcel->getActiveSheet()->setCellValue('A1', 'tipo de novedad');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'documento');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'fecha');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'descripcion');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'supervisor a cargo');
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'estado');

while($row = $resultado->fetch_assoc())
{
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $row['tipo']);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $row['documento']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $row['fecha']);
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $row['descripcion']);
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $row['supervisor']);
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $row['estado']);
    $fila++;
}

header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header('Content-Disposition: attachment;filename="novedadesaprendiz.xlsx"');
    header('Cache-Control: max-age=0');

$objPHPExcel = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objPHPExcel->save('php://output');
?>