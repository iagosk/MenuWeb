<?php

require_once("../models/Acomp.php");

// Controlador da Classe/Modelo Acomp.
class ControllerAcomp
{
    private $model;

    function __construct()
    {
        $this->model = new AcompModel();
    }

    function getAll()
    {
        $resultData = $this->model->getAll();
        // require_once("./views/main.php");
    }

    function insertAcomp(string $nome, string $dia)
    {
        try {
            $resultData = $this->model->insertAcomp($nome, $dia);
            require_once('../views/admin/sucessoCadastro.php');
        } catch (PDOException $error) {
            // echo "Error!" . $e->getMessage();
            require_once('../views/admin/falhaCadastro.php');
        }
    }
}
