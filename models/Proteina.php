<?php

  require_once("./connection/connect.php");
  class ProteinaModel extends Connect {
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
  }
?>