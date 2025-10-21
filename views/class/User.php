<?php
class User {
  public string $Nome;
  public int $Idade;
  public Endereco $Endereco;
  
  public function __construct(string $nome, int $idade, Endereco $endereco) {
    $this->Nome = $nome; 
    $this->Idade = $idade;
    $this->Endereco = $endereco;
  }
  
  public function MostrarDados():void {
    printf("Nome do Usuário: {$this->Nome}<br />");
    echo "Idade: {$this->Idade}<br />";
    echo "{$this->Endereco->MostrarEndereco()}<br />";
  }
}



class Endereco {
  public string $Rua;
  public string $Bairro;
  public int $Numero;
  public string $CEP;
  public string $Cidade;
  public string $Estado;
  public string $Pais;
  
  public function __construct(string $rua, string $bairro, int $numero, string $cep, string $cidade, string $estado, string $pais) {
    $this->Rua = $rua;
    $this->Bairro = $bairro;
    $this->Numero = $numero;
    $this->CEP = $cep;
    $this->Cidade = $cidade;
    $this->Estado = $estado;
    $this->Pais = $pais;
  }
  
  public function MostrarEndereco():void {
    echo "Bairro:{$this->Bairro}<br />Rua: {$this->Rua}";
  }
}

$endereco = new Endereco("Ozana Simoes Valdivino", "Seridó", 29, "59395-000","Cerro Cora", "Rio Grande do Norte", "Brasil");
$user = new User("Matheus", 20, $endereco);
?>