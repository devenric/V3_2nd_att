<?php
class Gestor{
    public function __construct(){
        if (!isset($_SESSION['criaturas'])) {
            $_SESSION['criaturas'] = [];
        }
    }
    //Ahora quedaría solamente los métodos CRUD
    public function listar(){
        return $_SESSION['criaturas'];
    }
    public function añadir(Criatura $especimen){
        $_SESSION['criaturas'][] = $especimen;
    }
    public function buscar($nombre){
        foreach ($_SESSION['criaturas'] as $p) {
            if ($p->getId == $id) {
                return $p
            ;}
            return null;
        }
    }
    public function editar($nivelPeligrosidad, $healthStatus){
        foreach ($_SESSION['criaturas'] as $p) {
            if ($p -> getNombre() == $nombre) {
                $p ->setEspecie($especie);
                $p ->setNivelPeligrosidad($nivelPeligrosidad);
                $p ->setHealthStatus($healthStatus);
            return true;}
                }
            return false;
    }
    public function eliminar(){
        foreach ($_SESSION['criaturas'] as $i => $p) {
            if ($p->getId() == $p) {
                unset($_SESSION['criaturas'][$i]);
                $_SESSION['criaturas'] = array_values($_SESSION['criaturas']);}
                return true;
        }
        return false;
    }
}
?>