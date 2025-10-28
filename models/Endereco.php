<?php
// Classe endereço utilizado para armazenar dados de endereço.
class Endereco
{
  public string $Rua;
  public string $Bairro;
  public int $Numero;
  public string $CEP;
  public string $Cidade;
  public string $Estado;
  public string $Pais;

  // método construtor da classe para capturar os dados e armazená-los.
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

  // método da classe para mostrar o endereço completo do usuário.
  public function MostrarEndereco(): void
  {
    echo "Bairro:{$this->Bairro}<br />Rua: {$this->Rua}<br /> nº: {$this->Numero} <br /> CEP: {$this->CEP} <br /> Cidade: {$this->Cidade} <br /> Estado: {$this->Estado} <br /> País: {$this->Pais}.";
  }
}
?>