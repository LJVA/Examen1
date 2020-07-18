<?php


class Usuario {
    
    private $id;
    private $cedula;
    private $nombre;
    private $telefono;
    private $correo;
    private $password;
    private $direccion;
    private $estado;
    private $rol;
    
    function __construct($id, $cedula, $nombre, $telefono, $correo, $password, $direccion, $estado, $rol) {
        $this->id = $id;
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->password = $password;
        $this->direccion = $direccion;
        $this->estado = $estado;
        $this->rol = $rol;
    }
    
    function getId() {
        return $this->id;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getPassword() {
        return $this->password;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getEstado() {
        return $this->estado;
    }

    function getRol() {
        return $this->rol;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setRol($rol) {
        $this->rol = $rol;
    }






   
    

}
?>