<?php
  require_once('./connection/connect.php');

  class PratoModel extends Connect {
    private string $table;

    function __construct()
    {
      parent::__construct();
      $this->table = "prato";
    }

    function getAll()
    {
      $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
      $resultQuery = $sqlSelect->fetchAll();

      return $resultQuery;
    }

    function insertPrato(string $nome, string $dia)
    {
      $sqlSelect = $this->connection->query("INSERT INTO prato(nome_prato, dia_prato) VALUES('{$nome}','{$dia}')");
    }
  }
?>