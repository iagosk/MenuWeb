<?php
require_once("../models/Proteina.php");

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
        require_once("../views/main.php");
    }

    function insertProteina(string $nome, string $dia)
    {
        try {
            $resultData = $this->model->insertProteina($nome, $dia);
            require_once('../views/admin/sucessoCadastro.php');
        } catch (PDOException $error) {
            // echo "Error!". $e->getMessage();
            require_once('../views/admin/falhaCadastro.php');
        }
    }
}
