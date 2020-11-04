<?php
require "persistence/connection.php";
require "persistence/facultadDAO.php";

class Facultad{
    private $idFacultad;
    private $nombre;
    private $direccion;
    private $telefono;
    private $conexion;
    private $facultadDAO;
    
    public function getIdFacultad()
    {
        return $this->idFacultad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    function Facultad ($_idFacultad="", $_nombre="", $_direccion="", $_telefono="") {
        $this -> idFacultad = $_idFacultad;
        $this -> nombre = $_nombre;
        $this -> direccion = $_direccion;
        $this -> telefono = $_telefono;
        $this -> conexion = new Connection();
        $this -> facultadDAO = new FacultadDAO($_idFacultad, $_nombre, $_direccion, $_telefono);        
    }
    
    function consultar(){
        $this -> conexion -> abrir();        
        $this -> conexion -> ejecutar($this -> facultadDAO -> consultar());
        $this -> conexion -> cerrar();        
        $resultado = $this -> conexion -> extraer();
        $this -> nombre = $resultado[0];
        $this -> apellido = $resultado[1];
        $this -> correo = $resultado[2];                
    }

    function crear(){
        $this -> conexion -> abrir();        
        $this -> conexion -> ejecutar($this -> facultadDAO -> crear());
        $this -> conexion -> cerrar();
    }
}

?>
