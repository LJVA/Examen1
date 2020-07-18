<?php
require_once dirname(__DIR__).'/DL/ConexionDB.php';
require_once dirname(__DIR__).'/Entidades/Cita.php';

class citaServicios {
    
    private $DB;
    
    public function __construct() {
        $this->DB = new ConexionDB();
    }
    
    public function registarCita($cita){
        $this->DB->getConeccion();
        $sql = "INSERT INTO CITAS (DUEÑO,MASCOTA,RAZA,EDAD,FECHA,OBSERVACION) VALUES (?,?,?,?,?,?)";
        $tipos = 'sssiss';
        $valores = array($cita->getDueño(),$cita->getMascota(),$cita->getRaza(),$cita->getEdad(),$cita->getFecha(),$cita->getObservacion());
        $this->DB->executeQuery($sql, $tipos, $valores);
        $this->DB->cerrarConeccion();
    }
    
    public function listaCitas(){
        $this->DB->getConeccion();
        $sql = "SELECT * FROM CITAS";
        $datos = $this->DB->executeQueryReturnData($sql);
        $citas = array();
        foreach ($datos as $posicion => $fila){
            $cita = new Cita($fila['id'],$fila['dueño'],$fila['mascota'],$fila['raza'],$fila['edad'],$fila['fecha'],$fila['observacion']);
            array_push($citas, $cita);
        }
        $this->DB->cerrarConeccion();
        return $citas;
    }
    
    public function eliminarCita($codigo){
         $this->DB->getConeccion();
         $sql = "DELETE FROM CITAS WHERE ID = ?";
         $tipos = 'i';
         $valores = array($codigo);
         $this->DB->executeQuery($sql, $tipos, $valores);
         $this->DB->cerrarConeccion();
        
    }
    
    public function buscarXcodigo($codigo){
         $this->DB->getConeccion();
         $sql = "SELECT * FROM CITAS WHERE ID = $codigo";
         $fila = $this->DB->executeQueryReturnData($sql);
         $cita = new Cita($fila[0]['id'],$fila[0]['dueño'],$fila[0]['mascota'],$fila[0]['raza'],$fila[0]['edad'],$fila[0]['fecha'],$fila[0]['observacion']);
         $this->DB->cerrarConeccion();
         return $cita;
    }
    
    public function guardarEditar($cita){
        $this->DB->getConeccion();
        $sql = "UPDATE CITAS SET DUEÑO = ?, MASCOTA = ?, RAZA = ?, EDAD = ?, FECHA = ?, OBSERVACION = ? WHERE ID = ?";
        $tipos = 'sssissi';
        $valores = array($cita->getDueño(),$cita->getMascota(),$cita->getRaza(),$cita->getEdad(),$cita->getFecha(),$cita->getObservacion(),$cita->getId());
        $this->DB->executeQuery($sql, $tipos, $valores);
        $this->DB->cerrarConeccion();
    }
    
}
