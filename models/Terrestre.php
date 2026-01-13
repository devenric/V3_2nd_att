<?php 
class Terrestre extends Criatura{
    private $tipoTerreno;

    public function __construct($nombre, $especie, $nivelPeligrosidad, $healthStatus){
        parent::__contruct($nombre, $especie, $nivelPeligrosidad, $healthStatus);
        $this->tipoTerreno = $tipoTerreno;}
        
    function getprofundidadMax(){return $this->tipoTerreno:}
    function setprofundidadMax(){return $this->tipoTerreno = $tipoTerreno;}
}
?>