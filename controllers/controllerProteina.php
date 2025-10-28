<?php 
    require_once("./models/Proteina.php");

    class ControllerProteina {
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
    }
?>