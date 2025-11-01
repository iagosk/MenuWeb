<?php 
require_once('../controllers/controllerProteina.php');

// Seção do Envio dos Dados da Proteína.

$nomeProteina = $_POST["nomeProteina"];
$diaProteina = $_POST['diaCardapio'];

$tamanhoNome = count($nomeProteina) -1;
$tamanhoDia = count($diaProteina) -1;

for($e = 0; $e <= $tamanhoNome && $e <= $tamanhoDia; $e++) {
        $actionProteina = !empty($_GET['a']) ? $_GET['a'] : 'insertProteina';
        $controllerProteina = new ControllerProteina();
        $controllerProteina->{$actionProteina}($nomeProteina[$e], $diaProteina[$e]);
}
?>