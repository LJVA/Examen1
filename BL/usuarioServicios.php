<?php
require_once dirname(__DIR__).'/DL/ConexionDB.php';
require_once dirname(__DIR__).'/Entidades/Usuario.php';

class usuarioServicios {
    
    private $DB;
    
    public function __construct() {
        $this->DB = new ConexionDB();
    }
    
    public function registrarUsuario($usuario){
        $this->DB->getConeccion();
        $sql = "INSERT INTO USUARIOS (CEDULA,NOMBRE,TELEFONO,CORREO,PASSWORD,DIRECCION,ESTADO,ROL) VALUES (?,?,?,?,?,?,?,?)";
        $tipos = 'ssisssis';
        $valores = array($usuario->getCedula(),$usuario->getNombre(),$usuario->getTelefono(),$usuario->getCorreo(),$usuario->getPassword(),$usuario->getDireccion(),$usuario->getEstado(),$usuario->getRol());
        $this->DB->executeQuery($sql, $tipos, $valores);
        $this->DB->cerrarConeccion();
    }
    
    public function listaUsers(){
        $this->DB->getConeccion();
        $sql = "SELECT * FROM USUARIOS";
        $datos = $this->DB->executeQueryReturnData($sql);
        $usuarios = array();
        foreach ($datos as $posicion => $fila){
            $usuario = new Usuario($fila['id'],$fila['cedula'],$fila['nombre'],$fila['telefono'],$fila['correo'],$fila['password'],$fila['direccion'],$fila['estado'],$fila['rol']);
            array_push($usuarios, $usuario);
        }
        $this->DB->cerrarConeccion();
        return $usuarios;
    }
    
    public function buscarXcodigo($codigo){
         $this->DB->getConeccion();
         $sql = "SELECT * FROM USUARIOS WHERE ID = $codigo";
         $fila = $this->DB->executeQueryReturnData($sql);
         $user = new Usuario($fila[0]['id'],$fila[0]['cedula'],$fila[0]['nombre'],$fila[0]['telefono'],$fila[0]['correo'],$fila[0]['password'],$fila[0]['direccion'],$fila[0]['estado'],$fila[0]['rol']);
         $this->DB->cerrarConeccion();
         return $user;
    }
    
    public function cambiarEstado($usuario){
        $this->DB->getConeccion();
        $sql = "UPDATE USUARIOS SET CEDULA = ?, NOMBRE = ?, TELEFONO = ?, CORREO = ?, PASSWORD = ?, DIRECCION = ?, ESTADO = ?, ROL = ? WHERE ID = ?";
        $tipos = 'ssisssisi';
        $valores = array($usuario->getCedula(),$usuario->getNombre(),$usuario->getTelefono(),$usuario->getCorreo(),$usuario->getPassword(),$usuario->getDireccion(),$usuario->getEstado(),$usuario->getRol(),$usuario->getId());
        $this->DB->executeQuery($sql, $tipos, $valores);
        $this->DB->cerrarConeccion();
    }
    
    public function validarUsuario($correo, $password){
        $this->DB->getConeccion();
        $sql = "SELECT * FROM USUARIOS WHERE CORREO = '$correo' AND PASSWORD = '$password'";
        $fila = $this->DB->executeQueryReturnData($sql);
        $this->DB->cerrarConeccion();
        
        if($fila != NULL){
            $user = new Usuario($fila[0]['id'],$fila[0]['cedula'],$fila[0]['nombre'],$fila[0]['telefono'],$fila[0]['correo'],$fila[0]['password'],$fila[0]['direccion'],$fila[0]['estado'],$fila[0]['rol']);
        }
        return $user;
    }
    
}
