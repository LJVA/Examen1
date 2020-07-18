<?php

class Cita {
    
    private $id;
    private $dueño;
    private $mascota;
    private $raza;
    private $edad;
    private $fecha;
    private $observacion;
    
    function __construct($id, $dueño, $mascota, $raza, $edad, $fecha, $observacion) {
        $this->id = $id;
        $this->dueño = $dueño;
        $this->mascota = $mascota;
        $this->raza = $raza;
        $this->edad = $edad;
        $this->fecha = $fecha;
        $this->observacion = $observacion;
    }
    
    function getId() {
        return $this->id;
    }

    function getDueño() {
        return $this->dueño;
    }

    function getMascota() {
        return $this->mascota;
    }

    function getRaza() {
        return $this->raza;
    }

    function getEdad() {
        return $this->edad;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getObservacion() {
        return $this->observacion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDueño($dueño) {
        $this->dueño = $dueño;
    }

    function setMascota($mascota) {
        $this->mascota = $mascota;
    }

    function setRaza($raza) {
        $this->raza = $raza;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setObservacion($observacion) {
        $this->observacion = $observacion;
    }



    
   

    
    
}

?>
