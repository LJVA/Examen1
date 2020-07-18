<?php
require_once dirname(__DIR__).'/BL/usuarioServicios.php';
session_start();

if(isset($_POST['accion'])){
     switch ($_POST['accion'])
     {
         case 'Registrar':
                guardarUsuario();
                header('location:../index.php');
                break;
         case 'Cancelar':
                header('location:../index.php');
                break;
        case 'Ingresar':
                $usuario = validarUsuario();
                $_SESSION['tipoUsuario'] = $usuario->getRol();
                if(!empty($usuario)&&$usuario->getEstado()!="0"){
                    $_SESSION['userLogin'] = $usuario;
                    header('location:../index.php');
                }else{
                    header('location:../UI/login.php');
                }
                break;
     }  
 }

 
 if(isset($_GET['accion'])){
      switch ($_GET['accion'])
     {
         case 'close':
                session_start();
                if(isset($_SESSION['userLogin'])){
                    session_destroy();
                    header('location:../UI/login.php');
                }
                break;
         case 'status':
                $codigo = $_GET['codigo'];
                $servicio = new usuarioServicios();
                $usuario = $servicio->buscarXcodigo($codigo);
                
                var_dump($usuario);
                echo '<hr>';
                if($usuario->getEstado() == "0"){
                    $usuario->setEstado("1");
                }else{
                    $usuario->setEstado("0");
                }
                
                var_dump($usuario);
                die();
                $servicio->cambiarEstado($usuario);
                break;
     }
 }
 
 function guardarUsuario(){
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $direccion = $_POST['direccion'];
    $rol = $_POST['rol'];
    
    $servicio = new usuarioServicios();
    $usuario = new Usuario(0,$cedula,$nombre,$telefono,$correo,$password,$direccion,0,$rol);
    $servicio->registrarUsuario($usuario);
 
 }
 
 function validarUsuario(){
     $correo = $_POST['correo'];
     $password = $_POST['password'];
     
     $servicio = new usuarioServicios();
     $usuario = $servicio->validarUsuario($correo, $password);
     
     return $usuario;
 }
 

?>
