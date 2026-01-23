<?php 
class Voladora extends Criatura{
    private $envergaduraAlas;

    public function __construct($nombre, $especie, $nivelPeligrosidad, $healthStatus, $envergaduraAlas){
        parent::__construct($nombre, $especie, $nivelPeligrosidad, $healthStatus);
        $this->envergaduraAlas = $envergaduraAlas;}
        
    function getenvergaduraAlas(){return $this->envergaduraAlas;}
    function setenvergaduraAlas($envergaduraAlas){return $this->envergaduraAlas = $envergaduraAlas;}
    function hacerSonido(){
        return "$this->nombre dice: ¡Miau!";
    }
}
?>