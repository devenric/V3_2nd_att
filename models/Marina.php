<?php 
private class Marina extends Criatura{
    private $profundidadMax;

    public function __construct($nombre, $especie, $nivelPeligrosidad, $healthStatus){
        parent::__contruct($nombre, $especie, $nivelPeligrosidad, $healthStatus);
        $this->profundidadMax = $profundidadMax;}
        
    function getprofundidadMax(){return $this->profundidadMax:}
    function setprofundidadMax(){return $this->profundidadMax = $profundidadMax;}
}
?>