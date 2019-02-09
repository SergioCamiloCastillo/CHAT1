<?php
class modelo{

    private $nombre;
    private $mensaje;

    public function modelo($nombre,$mensaje){
        $this->nombre=$nombre;
        $this->mensaje=$mensaje;

    }
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    function getNombre(){
        return $this->nombre;
    }
    function setMensaje($mensaje){
        $this->mensaje=$mensaje;
    }
    function getMensaje(){
        return $this->mensaje;
    }
}
