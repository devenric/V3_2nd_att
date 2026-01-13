<?php 
class Voladora extends Criatura{
    private $envergaduraAlas;

    public function __construct($nombre, $especie, $nivelPeligrosidad, $healthStatus){
        parent::__contruct($nombre, $especie, $nivelPeligrosidad, $healthStatus);
        $this->envergaduraAlas = $envergaduraAlas;}
        
    function getprofundidadMax(){return $this->envergaduraAlas:}
    function setprofundidadMax(){return $this->envergaduraAlas = $envergaduraAlas;}
}
?>