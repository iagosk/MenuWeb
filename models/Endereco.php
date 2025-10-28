<?php 
  require_once('./connection/connect.php');

  class EnderecoModel extends Connect {
    private string $table;

    function __construct()
    {
      parent::__construct();
      $this->table = "endereco";
    }

    function getAll() 
    {
      $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
      $resultQuery = $sqlSelect->fetchAll();

      return $resultQuery;
    }
  }
?>