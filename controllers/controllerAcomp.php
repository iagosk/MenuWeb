<?php

require_once("./models/Acomp.php");

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
        $resultData = $this->model->insertAcomp($nome, $dia);
    }
}
