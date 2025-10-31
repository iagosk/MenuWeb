<?php
require_once('./controllers/controllerUsuario.php');
require_once('./controllers/controllerPrato.php');

if(!empty($_POST["nome"])) {
  $nomeUsuario = $_POST['nome'];
  $senhaUsuario = $_POST['senha'];
  $actionUsuario = !empty($_GET['a']) ? $_GET['a'] : 'insertUsuario';  
  $controllerUsuario = new ControllerUsuario();
    $controllerUsuario->{$actionUsuario}($nomeUsuario, $senhaUsuario);  
}else if($_POST["nome_prato"]) 
{
  $nomePrato = $_POST['nome_prato'];
  $diaPrato = $_POST['dia_cardapio'];
  $actionPrato = !empty($_GET['a']) ? $_GET['a'] : 'insertPrato';
  $controllerPrato = new ControllerPrato();
  $controllerPrato->{$actionPrato}($nomePrato, $diaPrato);
}


