<?php
session_start();
require 'classes/PHPExcel.php';
require '../../modelo/Conexion.php';
$mysqli = new Conexion();

$sql = "SELECT proyecto.id_proyecto, proyecto.documento, proyecto.fechainicio, proyecto.fechafinal, proyecto.nombre, proyecto.descripcion, usuario.nombre as nombresupervisor,estado.nombre as nombreestado
FROM proyecto
INNER JOIN usuario on proyecto.id_usuario=usuario.id_usuario
INNER JOIN estado on proyecto.id_estado=estado.id_estado";
$resultado = $mysqli->query($sql);

$fila = 2;

$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()->setCreator("Monitorias y apoyo de sostenimiento SENA")->setDescription("Reporte de Proyectos");

$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle("Proyecto aprendices");


$objPHPExcel->getActiveSheet()->setCellValue('A1', 'documento');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'fecha de inicio ');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'fecha final ');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'nombre de el proyecto');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'descripcion');
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'supervisor a cargo');
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'estado');

while($row = $resultado->fetch_assoc())
{
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $row['documento']);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $row['fechainicio']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $row['fechafinal']);
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $row['nombre']);
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $row['descripcion']);
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $row['nombresupervisor']);
    $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $row['nombreestado']);
    $fila++;
}

header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header('Content-Disposition: attachment;filename="proyectos.xlsx"');
    header('Cache-Control: max-age=0');

$objPHPExcel = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objPHPExcel->save('php://output');
?>