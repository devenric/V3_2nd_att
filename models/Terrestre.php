<?php 
class Terrestre extends Criatura{
    private $tipoTerreno;

    public function __construct($nombre, $especie, $nivelPeligrosidad, $healthStatus, $tipoTerreno){
        parent::__construct($nombre, $especie, $nivelPeligrosidad, $healthStatus);
        $this->tipoTerreno = $tipoTerreno;}
        
    function gettipoTerreno(){return $this->tipoTerreno;}
    function setprofundidadMax(){return $this->tipoTerreno = $tipoTerreno;}
    function hacerSonido(){
        return "$this->nombre dice: ¡Miau!";
    }
}
?>