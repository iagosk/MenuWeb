<?php

require_once('../models/Usuario.php');

class ControllerUsuario
{
    private $model;
    
    function __construct()
    {
        $this->model = new UsuarioModel();
    }
    
    function getAll()
    {
        $resultData = $this->model->getAll();
        // require_once("./views/main.php");
    }
    
    function insertUsuario(string $nome, string $senha)
    {
        try {
            $resultData = $this->model->insertUsuario($nome, $senha);
            require_once('../views/main.php');
        }catch (PDOException $error) {
            echo $error;
            die();
        }
    }
}
