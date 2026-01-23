<?php
interface InterfazCrud{
    function listar();
    function añadir(Criatura $especimen);
    function buscar($nombre);
    function editar($nombre, $nivelPeligrosidad, $healthStatus);
    function eliminar($nombre);
}
?>