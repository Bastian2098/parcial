<?php
class FacultadDAO{
    private $idFacultad;
    private $nombre;
    private $direccion;
    private $telefono;
    
    function Facultad ($_idFacultad, $_nombre, $_direccion, $_telefono) {
        $this -> idFacultad = $_idFacultad;
        $this -> nombre = $_nombre;
        $this -> direccion = $_direccion;
        $this -> telefono = $_telefono;      
    }
    
    function consultar () {
        return "select nombre, apellido, correo
                from Administrador
                where idAdministrador = '" . $this -> idFacultad . "'";
    }

    function insertar() {
        return "insert into Facultad (nombre, direccion, telefono)
                values ('" . $this -> nombre . "', '" . $this -> direccion . "', '".$this -> telefono.")";                
    }
    
}

?>