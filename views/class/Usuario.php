<?php
class Usuario
{
  private string $Nome;
  private string $Senha;
  private Endereco $Endereco;

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
  
  public function GetNome(): string {
    return $this->Nome;
  }
}
?>