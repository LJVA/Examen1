<?php
require_once dirname(__DIR__).'/BL/citaServicios.php';

if(isset($_POST['accion'])){
     switch ($_POST['accion'])
     {
         case 'Registrar':
                guardarCita();
                header('location:../index.php');
                break;
         case 'Cancelar':
                header('location:../index.php');
                break;
         case 'Modificar':
                guardarEditar();
                header('location:../index.php');
                break;
     }  
 }
 
 if(isset($_GET['accion'])){
     switch ($_GET['accion'])
     {
         case 'Eliminar':
                eliminarCita();
                header('location:../index.php');
                break;
     }  
 }
 
 function guardarCita(){
    $dueño = $_POST['dueño'];
    $mascota = $_POST['mascota'];
    $raza = $_POST['raza'];
    $edad = $_POST['edad'];
    $fecha = $_POST['fecha'];
    $observacion = $_POST['observacion'];
    
    $servicio = new citaServicios();
    $cita = new Cita(0,$dueño,$mascota,$raza,$edad,$fecha,$observacion);
    $servicio->registarCita($cita);
 }
 
 function eliminarCita(){
    $codigo = $_GET['codigo'];
 
    $servicio = new citaServicios();
    $servicio->eliminarCita($codigo);
 }
 
 function  guardarEditar(){
    $id = $_POST['id'];
    $dueño = $_POST['dueño'];
    $mascota = $_POST['mascota'];
    $raza = $_POST['raza'];
    $edad = $_POST['edad'];
    $fecha = $_POST['fecha'];
    $observacion = $_POST['observacion'];
    
    $servicio = new citaServicios();
    $cita = new Cita($id,$dueño,$mascota,$raza,$edad,$fecha,$observacion);
    $servicio->guardarEditar($cita);
 }
 

?>