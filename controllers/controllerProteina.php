<?php
require_once("./models/Proteina.php");

// Controlador da Classe/Modelo Proteina.
class ControllerProteina
{
    private $model;

    function __construct()
    {
        $this->model = new ProteinaModel();
    }

    function getAll()
    {
        $resultData = $this->model->getAll();
        require_once("./views/main.php");
    }

    function insertProteina(string $nome, string $dia)
    {
        $resultData = $this->model->insertProteina($nome, $dia);
    }
}
