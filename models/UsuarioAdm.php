<?php
include_once("./Endereco.php");
include_once("./Usuario.php");

class UsuarioAdm extends Usuario
{
    private string $Status = "admin";
    public function __construct(string $nome, string $senha, Endereco $endereco)
    {
        $this->Nome = $nome;
        $this->Senha = $senha;
    }
}

$endereco = new Endereco("Ozana", "Seridó", 29, "59395-000", "Cerro Corá", "RN", "Brasil");
$usuario = new UsuarioAdm("Matheus", "123", $endereco);

echo "Endereço: <br />",$usuario->Endereco->MostrarEndereco();
?>