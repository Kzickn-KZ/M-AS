<?php
session_start();
require 'classes/PHPExcel.php';
require '../../modelo/Conexion.php';
$mysqli = new Conexion();

$sql = "SELECT usuario.id_usuario,usuario.documento, tipoDocumento.nombre as tipodedocumento, usuario.nombre, usuario.apellido, usuario.correo ,usuario.telefono,usuario.contrasena,usuario.passadmin,usuario.passsuper,sede.nombre as sede, programa.nombre as nombreprograma, ficha.nombre as ficha, tipoUsuario.nombre as programa, rol.nombre as rol, estado.nombre as estado FROM usuario
INNER JOIN tipoDocumento on usuario.id_tipoDocumento=tipoDocumento.id_tipoDocumento
INNER JOIN sede on usuario.id_sede=sede.id_sede
INNER JOIN programa on usuario.id_programa=programa.id_programa
INNER JOIN ficha on usuario.id_ficha=ficha.id_ficha
INNER JOIN tipoUsuario on usuario.id_tipoUsuario=tipoUsuario.id_tipoUsuario
INNER JOIN rol on usuario.id_rol=rol.id_rol
INNER JOIN estado on usuario.id_estado=estado.id_estado
WHERE rol.id_rol=1";
$resultado = $mysqli->query($sql);

$fila = 2;

$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()->setCreator("Monitorias y apoyo de sostenimiento SENA")->setDescription("Reporte de Proyectos");

$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle("Aprendices");


$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Documento');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Correo');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Telefono');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Sede');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Ficha');
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'Programa');
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'Tipo de usuario');
$objPHPExcel->getActiveSheet()->setCellValue('H1', 'Estado');

while($row = $resultado->fetch_assoc())
{
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $row['documento']);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $row['correo']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $row['telefono']);
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $row['sede']);
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $row['ficha']);
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $row['nombreprograma']);
    $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $row['programa']);
    $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $row['estado']);
    $fila++;
}

header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header('Content-Disposition: attachment;filename="proyectos.xlsx"');
    header('Cache-Control: max-age=0');

$objPHPExcel = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objPHPExcel->save('php://output');
?>