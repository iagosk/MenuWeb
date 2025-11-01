<?php
require_once('../connection/connect.php');

// Classe/Modelo Acomp.
class AcompModel extends Connect
{
  private string $table;

  function __construct()
  {
    parent::__construct();
    $this->table = 'acompanhamento';
  }

  function getAll()
  {
    $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
    $resultQuery = $sqlSelect->fetchAll();

    return $resultQuery;
  }
  
  function insertAcomp(string $nome, string $dia)
  {
    $sqlSelect = $this->connection->query("INSERT INTO $this->table(nomeAcomp, diaCardapio) VALUES('{$nome}','{$dia}')");
  }
}
