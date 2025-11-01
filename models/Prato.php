<?php
  require_once('../connection/connect.php');

  // Classe/Modelo Prato
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
      // echo $nome;
      $sqlSelect = $this->connection->query("INSERT INTO $this->table(nomePrato, diaCardapio) VALUES('{$nome}','{$dia}')");
    }
  }
?>