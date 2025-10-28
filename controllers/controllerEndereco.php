<?php 
    require_once('./models/Endereco.php');

    class ControllerEndereco {
        private $model;

        function __construct()
        {
            $this->model = new EnderecoModel();
        }

        function getAll() 
        {
            $resultData = $this->model->getAll();
            // require_once('./views/main.php');
        }
    }
?>