<?php 
    include_once('../connection/connect.php');

    $sql = "SELECT * FROM segunda";

    $result = $connection->query($sql);
?>

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
            while($cardapio_data = mysqli_fetch_assoc($result))
            {
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