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

    $_SESSION['user'] = $user;
    Header('Location: ../views/main.php');
}