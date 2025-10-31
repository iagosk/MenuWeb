<?php
require_once('./controllers/controllerUsuario.php');
require_once('./controllers/controllerPrato.php');
require_once('./controllers/controllerAcomp.php');
require_once('./controllers/controllerProteina.php');

// Seção de Envio dos Dados do Usuário.
// $nomeUsuario = $post;
// $senhaUsuario = $_POST['senhaUsuario'];
// $actionUsuario = !empty($_GET['a']) ? $_GET['a'] : 'insertUsuario';
// $controllerUsuario = new ControllerUsuario();
// $controllerUsuario->{$actionUsuario}($nomeUsuario, $senhaUsuario);

// Seção de Envio dos Dados do Prato.
// $nomePrato = $_POST["nomePrato"];
// $diaPrato = $_POST['diaCardapio'];

// $tamanhoNome = count($nomePrato) -1;
// $tamanhoDia = count($diaPrato) -1;

// for($e = 0; $e <= $tamanhoNome && $e <= $tamanhoDia; $e++) {
  //         $actionPrato = !empty($_GET['a']) ? $_GET['a'] : 'insertPrato';
  //         $controllerPrato = new ControllerPrato();
  //         $controllerPrato->{$actionPrato}($nomePrato[$e], $diaPrato[$e]);
  // }
  
// Seção de Envio dos Dados do Acompanhamento.
// $nomeAcomp = $_POST["nomeAcomp"];
// $diaAcomp = $_POST['diaCardapio'];

// $tamanhoNome = count($nomeAcomp) -1;
// $tamanhoDia = count($diaAcomp) -1;

// for($e = 0; $e <= $tamanhoNome && $e <= $tamanhoDia; $e++) {
//         $actionAcomp = !empty($_GET['a']) ? $_GET['a'] : 'insertAcomp';
//         $controllerAcomp = new ControllerAcomp();
//         $controllerAcomp->{$actionAcomp}($nomeAcomp[$e], $diaAcomp[$e]);
// }

// Seção do Envio dos Dados da Proteína.
// $nomeProteina = $_POST["nomeProteina"];
// $diaProteina = $_POST['diaCardapio'];

// $tamanhoNome = count($nomeProteina) -1;
// $tamanhoDia = count($diaProteina) -1;

// for($e = 0; $e <= $tamanhoNome && $e <= $tamanhoDia; $e++) {
//         $actionProteina = !empty($_GET['a']) ? $_GET['a'] : 'insertProteina';
//         $controllerProteina = new ControllerProteina();
//         $controllerProteina->{$actionProteina}($nomeProteina[$e], $diaProteina[$e]);
// }
