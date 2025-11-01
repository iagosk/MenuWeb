<?php
require_once('../controllers/controllerPrato.php');

// Seção de Envio dos Dados do Prato.

$nomePrato = $_POST["nomePrato"];
$diaPrato = $_POST['diaCardapio'];

$tamanhoNome = count($nomePrato) -1;
$tamanhoDia = count($diaPrato) -1;

for($e = 0; $e <= $tamanhoNome && $e <= $tamanhoDia; $e++) {
          $actionPrato = !empty($_GET['a']) ? $_GET['a'] : 'insertPrato';
          $controllerPrato = new ControllerPrato();
          $controllerPrato->{$actionPrato}($nomePrato[$e], $diaPrato[$e]);
  }