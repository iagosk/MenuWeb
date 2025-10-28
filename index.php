<?php
require_once('./controllers/controllerUsuario.php');
require_once('./controllers/controllerPrato.php');

$nomeUsuario = !empty($_POST['nome']);
$senhaUsuario = !empty($_POST['senha']);
$nomePrato = $_POST['nome_prato']);
$diaPrato = !empty($_POST['dia_cardapio']);

$actionUsuario = !empty($_GET['a']) ? $_GET['a'] : 'insertUsuario';
$actionPrato = !empty($_GET['a']) ? $_GET['a'] : 'insertPrato';

$controllerUsuario = new ControllerUsuario();
$controllerUsuario->{$actionUsuario}($nomeUsuario, $senhaUsuario);
$controllerPrato = new ControllerPrato();
$controllerPrato->{$actionPrato}($nomePrato, $diaPrato);
