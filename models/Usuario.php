<?php
// Referência para o arquivo de conexão do Banco de Dados.
require_once('./connection/connect.php');

// Referência para o arquivo da classe Endereço.
// include_once("./Endereco.php");

// Classe Usuário.
class UsuarioModel extends Connect
{
  private string $table;

  // método construtor da classe para capturar e armazenar os dados.
  function __construct()
  {
    parent::__construct();
    $this->table = 'usuario';
  }

  // Função que retorna todos os Usuários cadastrados no banco de dados.
  function getAll()
  {
    $sqlSelect = $this->connection->query("SELECT DISTINCT nome FROM $this->table");
    $resultQuery = $sqlSelect->fetchAll();

    return $resultQuery;
  }

  function insertUsuario(string $nome, string $senha)
  {
  $sqlSelect = $this->connection->query("INSERT INTO usuario(nome, senha) VALUES  ('{$nome}', '{$senha}')");
  }
}
