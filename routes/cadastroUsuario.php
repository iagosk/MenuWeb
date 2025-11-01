<?php
require_once('../controllers/controllerUsuario.php');

// Seção de Envio dos Dados do Usuário.

$nomeUsuario = $_POST['nomeUsuario'];
$senhaUsuario = $_POST['senhaUsuario'];
$actionUsuario = !empty($_GET['a']) ? $_GET['a'] : 'insertUsuario';
$controllerUsuario = new ControllerUsuario();
$controllerUsuario->{$actionUsuario}($nomeUsuario, $senhaUsuario);
