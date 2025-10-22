<?php
class Usuario
{
  public string $Nome;
  public string $Senha;
  public Endereco $Endereco;

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
?>