<?php 
class Marina extends Criatura{
    private $profundidadMax;

    public function __construct($nombre, $especie, $nivelPeligrosidad, $healthStatus, $profundidadMax){
        parent::__construct($nombre, $especie, $nivelPeligrosidad, $healthStatus);
        $this->profundidadMax = $profundidadMax;}
        
    function getprofundidadMax(){return $this->profundidadMax;}
    function setprofundidadMax(){return $this->profundidadMax = $profundidadMax;}
    function hacerSonido(){
        return "$this->nombre dice: ¡Miau!";
    }
}
?>