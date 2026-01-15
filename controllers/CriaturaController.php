<?php

class CriaturaController {

    private $gestor;

    public function __construct() {
        $this->gestor = new Gestor();
    }

    public function index() {
        $criaturas = $this->gestor->listar();
        include "views/listar.php";
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $especie = $_POST['especie'];
            $nivelPeligrosidad = $_POST['nivelPeligrosidad'];
            $healthStatus = $_POST['healthStatus'];
            $criatura = new Criatura($nombre, $especie, $nivelPeligrosidad, $healthStatus);
            $this->gestor->añadir($criatura);  
            header("Location: index.php");
            exit;
        }
        include "views/crear.php";
    }
    public function editar(){
        $nombre = $_GET['nombre'] ?? null;
        if (!$nombre) {
            echo "No se han encontrado nombres";
            exit;
        }else{
            $this->gestor->buscar($nombre);
                if (!$criatura) {
                    echo "No se han encontrado criaturas";
                    exit;
                }
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $this->gestor->editar($nivelPeligrosidad,$healthStatus);
                    header("Location: index.php");
                }
            include "views/editar.php";
        }
    }
    public function eliminar(){
        $nombre = $_GET['nombre'] ?? null;
        $this->gestor->eliminar($nombre);
        header("Location: index.php");
    }
}