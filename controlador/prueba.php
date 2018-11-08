<?php

include_once '../controlador/class.usuario.php';
include_once '../controlador/class.proyecto.php';
include_once '../controlador/class.citacion.php';
include_once '../controlador/class.ficha.php';
include_once '../controlador/class.notificar.php';
include_once '../controlador/class.horas.php';
include_once'../controlador/class.programa.php';


//CODIGO PARA ACEPTAR APRENDICES REQUIERE LA CLASE USUARIO//
extract($_GET);
          if(@$codigohabilitar==2){
              $id=$_REQUEST['codigo'];
          Usuario::cambiarEstados(1, $id);
        }
//CODIGO PARA CAMBIAR ESTADO DE PROYECTOS//
        extract($_GET);
          if(@$proyecaceptar==2){
          $id=$_REQUEST['codigo'];
                          proyecto::cambiarestado(1, $id);
        }

        extract($_GET);
          if(@$proyeccancelar==2){
          $id=$_REQUEST['codigo'];
          proyecto::cambiarestado(2, $id);
        }
//CODIGO ELIMINAR CITACION//
        extract($_GET);
        if (@$codigoborrar==2) {
          $codigo=$_REQUEST['codigo'];
          Citacion::eliminar($codigo);
        }
//CODIGO CAMBIAR ESTADO A LA FICHA//
        extract($_GET);
        if (@$fichahabilitar==2) {
          $codigo=$_REQUEST['codigo'];
          Ficha::cambiarestado(1, $codigo);
        }

        extract($_GET);
        if (@$fichadeshabilitar==2) {
          $codigo=$_REQUEST['codigo'];
          Ficha::cambiarestado(2 , $codigo);
        }
//ESTADO DE LAS NOVEDADES//
        extract($_GET);
        if(@$estadox==2){
        $codigo=$_REQUEST['codigo'];
        Novedades::cambiestado(4, $codigo);
        }

        extract($_GET);
        if(@$estadoy==2){
        $codigo=$_REQUEST['codigo'];
        Novedades::cambiestado(3, $codigo);
        }
//ESTADOS DE LAS HORAS//
        extract($_GET);
                if(@$codigoborrarr==2){
                    $id=$_REQUEST['codigo'];
                Horas::cambiarEstado(4,$id);
                }

        extract($_GET);
                if(@$codigohabilitarr==2){

                $id=$_REQUEST['codigo'];
                Horas::cambiarEstado(3,$id);
                }
//ESTADOS DE LOS USUARIOS
        extract($_GET);
          if(@$usuin==2){
              $id=$_REQUEST['codigo'];
          Usuario::cambiarEstados(2, $id);
        }

        extract($_GET);
          if(@$usuha==2){
              $id=$_REQUEST['codigo'];
          Usuario::cambiarEstados(1, $id);
        }


//TOK//
        extract($_GET);
        if(@$codigotok==2){
        $codigo = $_REQUEST['codigo'];
        $tok = 1;
        Horas::cambiartok($tok, $codigo);
        }

//CAMBIO DE ESTADO DE PROGRAMA//
extract($_GET);
        if(@$proaceptar==2){
        $codigo = $_REQUEST['codigo'];
        Programa::cambiestado(1, $codigo);
        }

        extract($_GET);
        if(@$pronoaceptar==2){
        $codigo = $_REQUEST['codigo'];
        Programa::cambiestado(2, $codigo);
        }

//REINICIO DE HORAS//
extract($_GET);
        if(@$reinicio==2){
                $reinicio=1;
        Horas::reiniciohoras($reinicio);
        }





?>