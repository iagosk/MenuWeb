<?php
// Referência para o arquivo da classe Endereço.
include_once("./Endereco.php");

// Classe Usuário.
class Usuario
{
  public string $Nome;
  public string $Senha;
  public Endereco $Endereco;

  // método construtor da classe para capturar e armazenar os dados.
  public function __construct(string $nome, string $senha, Endereco $endereco)
  {
    $this->Nome = $nome;
    $this->Senha = $senha;
    $this->Endereco = $endereco;
  }

  public function MostrarDados(): void
  {
    printf("Nome do Usuário: {$this->Nome}<br />");
    echo "Senha: {$this->Senha}<br />";
    echo "{$this->Endereco->MostrarEndereco()}<br />";
  }
}

// $endereco = new Endereco("Ozana", "Seridó", 29, "59395-000", "Cerro Corá", "RN", "Brasil");
// $usuario = new Usuario("Matheus", "123", $endereco);
?>