<?php
require('../models/Prato.php');

// Controlador da Classe/Modelo Prato.
class ControllerPrato
{
    private $model;

    function __construct()
    {
        $this->model = new PratoModel();
    }

    function getAll()
    {
        $resultData = $this->model->getAll();
        // require_once("./views/main.php");
    }

    function insertPrato(string $nome, string $dia)
    {
        try {
            $resultData = $this->model->insertPrato($nome, $dia);
            require_once('../views/admin/sucessoCadastro.php');
        }catch(PDOException $error) {
            // echo "Error!". $e->getMessage();
            require_once('../views/admin/falhaCadastro.php');
        }
    }
}
