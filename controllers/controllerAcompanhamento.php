<?php 

    require_once("./models/Acompanhamento.php");

    class ControllerAcompanhamento {
        private $model;

        function __construct()
        {
            $this->model = new AcompanhamentoModel();
        }

        function getAll()
        {
            $resultData = $this->model->getAll();
            // require_once("./views/main.php");
        }
    }
?>