<?php

class CriaturaController {

    private $gestor;

    public function __construct(InterfazCrud $gestor) {
        $this->gestor = $gestor;
    }

    public function index() {
    $Elempagina = 5;
    $paginaActual = isset($_GET['p']) ? (int)$_GET['p'] : 1;
    $listaTotal = $this->gestor->listar();
    $totalElementos = count($listaTotal);
    $totalPaginas = ceil($totalElementos/$Elempagina);
    $primerElemento = ($paginaActual-1) * $Elempagina;
    $criaturas = array_slice($listaTotal, $primerElemento, $Elempagina);
    include "views/listar.php";
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $especie = $_POST['especie'];
            $nivelPeligrosidad = $_POST['nivelPeligrosidad'];
            $healthStatus = $_POST['healthStatus'];
            $tipo = $_POST['tipo'];
            if ($tipo === 'Marina') {
                $profundidadMax = $_POST['profundidadMax'] ?? 0;
                $criatura = new Marina($nombre, $especie, $nivelPeligrosidad, $healthStatus, $profundidadMax);
            } elseif ($tipo === 'Voladora') {
                $envergaduraAlas = $_POST['envergaduraAlas'] ?? 0;
                $criatura = new Voladora($nombre, $especie, $nivelPeligrosidad, $healthStatus, $envergaduraAlas);
            } elseif ($tipo === 'Terrestre') {
                $tipoTerreno = $_POST['tipoTerreno'] ?? '';
                $criatura = new Terrestre($nombre, $especie, $nivelPeligrosidad, $healthStatus, $tipoTerreno);
            } else {
                $criatura = new Criatura($nombre, $especie, $nivelPeligrosidad, $healthStatus);
            }
            $this->gestor->añadir($criatura);  
            header("Location: index.php");
            exit;
        }
        $criatura = null;
        include "views/crear.php";
    }
    public function editar(){
        $nombre = $_GET['nombre'] ?? null;
        if (!$nombre) {
            echo "No se han encontrado nombres";
            exit;
        }
        $criatura = $this->gestor->buscar($nombre);
        if (!$criatura) {
            echo "No se han encontrado criaturas";
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nivelPeligrosidad = $_POST['nivelPeligrosidad'];
            $healthStatus = $_POST['healthStatus'];
            $this->gestor->editar($nombre, $nivelPeligrosidad, $healthStatus);
            header("Location: index.php");
            exit;
        }
        include "views/editar.php";
    }
    public function eliminar(){
        $nombre = $_GET['nombre'] ?? null;
        $this->gestor->eliminar($nombre);
        header("Location: index.php");
    }
}