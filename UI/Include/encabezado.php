<?php
    session_start();
    if(!isset($_SESSION['userLogin'])){
        header("location:UI/login.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Veterinaria "TANUKI"</title>
        <link rel="stylesheet" type="text/css" href="UI/Css/estilos.css">
    </head>
    <body>
        <nav>
            <ul>
                <?php if($_SESSION['tipoUsuario'] == 'Administrador'){ ?>
                <li><a href="UI/registrarUsuario.php">Registrar Usuario</a></li>
                <li><a href="UI/listarUsuarios.php">Activar / Desactivar - Usuario</a></li>
                <li><a href="UI/registrarCita.php">Registrar Cita</a></li>
                <li><a href="UI/listarCitas.php">Listar Citas</a></li>
                <li><a href="BL/usuarioController.php?accion=close">Cerrar Sesion</a></li>
                <?php }else{?>
                <li><a href="UI/registrarCita.php">Registrar Cita</a></li>
                <li><a href="UI/listarCitas.php">Listar Citas</a></li>
                <li><a href="BL/usuarioController.php?accion=close">Cerrar Sesion</a></li>
                <?php }?>
            </ul>
        </nav>
