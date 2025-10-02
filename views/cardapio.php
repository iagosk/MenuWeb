<?php
//  Instãncia para conectar o arquivo 'connect.php' com esta página.
include_once('../connection/connect.php');

// Variável que armazena string de consulta que será usada de argumento no método seguinte.

$sql = "SELECT * FROM segunda";

// Varável para consulta da tabela 'segunda' presente no banco de dados.
$result = $connection->query($sql);
?>

<!-- Página de índice para usuário padrão do sistema. -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
</head>

<body>
    <div class="container">
        <h2>Cardapio da segunda:</h2>
        <?php

        // Estrutura de laço de repetição para demonstrar cada elemento armazenado na tabela 'segunda'.  
        while ($cardapio_data = mysqli_fetch_assoc($result)) {
            echo "<h2>";
            echo $cardapio_data['prato_principal'];
            echo "</h2>";
            echo "<h2>";
            echo $cardapio_data['proteina'];
            echo "</h2>";
            echo "<h2>";
            echo $cardapio_data['acompanhamento'];
            echo "</h2>";
        }
        ?>
    </div>
</body>

</html>