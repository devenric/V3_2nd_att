<?php

class CriaturaController {

    private $gestor;

    public function __construct() {
        $this->gestor = new Gestor();
    }

    public function index() {
        $productos = $this->gestor->listar();
        include "views/listar.php";
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['id'];
            $especie = $_POST['nombre'];
            $nivelPeligrosidad = $_POST['formato'];
            $healthStatus = new Marina($id, $nombre, $formato);
            $this->gestor->añadir($producto);  
            header("Location: index.php");
            exit;
        }

        include "views/crear.php";
    }
}