<?php
session_start();
if(isset($_POST['button-submit'])) {
    include_once('../models/Usuario.php');
    include_once('../models/Endereco.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $pais = $_POST['pais'];

    $endereco = new Endereco($rua, $bairro, $numero, $cep, $cidade, $estado, $pais);
    $user = new Usuario($nome, $senha, $endereco);

    $_SESSION['nome'] = $user->Nome;
    $_SESSION['senha'] = $user->Senha;
    $_SESSION['rua'] = $user->Endereco->Rua;
    $_SESSION['bairro'] = $user->Endereco->Bairro;
    $_SESSION['numero'] = $user->Endereco->Numero;
    $_SESSION['cep'] = $user->Endereco->CEP;
    $_SESSION['cidade'] = $user->Endereco->Cidade;
    $_SESSION['estado'] = $user->Endereco->Estado;
    $_SESSION['pais'] = $user->Endereco->Pais;
    Header('Location: ../views/main.php');
}

?>