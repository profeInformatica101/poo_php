<?php
class Cliente {
    private $nombre; 

    public function __construct($nombre){
        $this->nombre= $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

}
?>