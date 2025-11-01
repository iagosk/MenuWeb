<?php
require_once('../controllers/controllerAcomp.php');

// Seção de Envio dos Dados do Acompanhamento.

$nomeAcomp = $_POST["nomeAcomp"];
$diaAcomp = $_POST['diaCardapio'];

$tamanhoNome = count($nomeAcomp) - 1;
$tamanhoDia = count($diaAcomp) - 1;

for ($e = 0; $e <= $tamanhoNome && $e <= $tamanhoDia; $e++) {
    $actionAcomp = !empty($_GET['a']) ? $_GET['a'] : 'insertAcomp';
    $controllerAcomp = new ControllerAcomp();
    $controllerAcomp->{$actionAcomp}($nomeAcomp[$e], $diaAcomp[$e]);
}
