<?php
session_start();
require 'classes/PHPExcel.php';
require '../../modelo/Conexion.php';
$mysqli = new Conexion();

$sql = "SELECT  horas.id_horas, horas.documento, horas.fecha, horas.horas_realizadas, horas.descripcion,
usuario.nombre as nombresupervisor, estado.nombre as nombreestado , horas.tok
FROM  horas
INNER JOIN usuario on horas.id_usuario=usuario.id_usuario
INNER JOIN estado on horas.id_estado=estado.id_estado
WHERE horas.documento='$_SESSION[documento]' and tok=0 ORDER BY horas.fecha ASC";
$resultado = $mysqli->query($sql);

$fila = 2;

$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()->setCreator("Monitorias y apoyo de sostenimiento SENA")->setDescription("Reporte de horas");

$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle("horas aprendiz");


$objPHPExcel->getActiveSheet()->setCellValue('A1', 'documento');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'fecha');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'horas realizadas');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'descripcion');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'supervisor a cargo');
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'estado');

while($row = $resultado->fetch_assoc())
{
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $row['documento']);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $row['fecha']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $row['horas_realizadas']);
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $row['descripcion']);
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $row['nombresupervisor']);
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $row['nombreestado']);
    $fila++;
}

header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header('Content-Disposition: attachment;filename="horasaprendiz.xlsx"');
    header('Cache-Control: max-age=0');

$objPHPExcel = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objPHPExcel->save('php://output');
?>