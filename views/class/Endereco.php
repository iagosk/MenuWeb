<?php
class Endereco
{
  public string $Rua;
  public string $Bairro;
  public int $Numero;
  public string $CEP;
  public string $Cidade;
  public string $Estado;
  public string $Pais;

  public function __construct(string $rua, string $bairro, int $numero, string $cep, string $cidade, string $estado, string $pais)
  {
    $this->Rua = $rua;
    $this->Bairro = $bairro;
    $this->Numero = $numero;
    $this->CEP = $cep;
    $this->Cidade = $cidade;
    $this->Estado = $estado;
    $this->Pais = $pais;
  }

  public function MostrarEndereco(): void
  {
    echo "Bairro:{$this->Bairro}<br />Rua: {$this->Rua}";
  }
}
?>