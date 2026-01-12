<?php
protected class Criatura{ //declaración Clase
    private $nombre;
    private $especie;
    private $nivelPeligrosidad;
    private $ealthStatus;

public function __construct($nombre, $especie, $nivelPeligrosidad, $healthStatus){ //construct
    $this->nombre = $nombre;
    $this->especie = $especie;
    $this->nivelPeligrosidad = $nivelPeligrosidad;
    $this->healthStatus = $healthStatus;
    }
    public function getNombre(){return $this->nombre;}
    public function getEspecie(){return $this->especie;}
    public function getNivelPeligrosidad(){return $this->nivelPeligrosidad;}
    public function getHealthStatus(){return $this->healthStatus;}

    public function setNombre($nombre){return $this->nombre = $nombre;}
    public function setEspecie($especie){return $this->especie = $especie;}
    public function setNivelPeligrosidad($nivelPeligrosidad){return $this->nivelPeligrosidad = $nivelPeligrosidad;}
    public function setHealthStatus($healthStatus){return $this->HealthStatus = $healthStatus;}
}
?>