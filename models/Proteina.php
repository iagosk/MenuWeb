<?php
require_once("./connection/connect.php");

// Classe/Modelo Proteina.
class ProteinaModel extends Connect
{
  private string $table;

  function __construct()
  {
    parent::__construct();
    $this->table = "proteina";
  }

  function getAll()
  {
    $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
    $resultQuery = $sqlSelect->fetchAll();

    return $resultQuery;
  }

  function insertProteina(string $nome, string $dia)
  {
    $sqlSelect = $this->connection->query("INSERT INTO $this->table(nomeProteina, diaCardapio) VALUES('{$nome}','{$dia}')");
  }
}
