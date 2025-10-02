<?php 
    $dbHostname = '127.0.0.1';
    $dbUsername = 'root';
    $dbPassword = "";
    $dbName = "cardapios";
    
    $connection = new mysqli($dbHostname, $dbUsername, $dbPassword, $dbName);

    // if($connection->connect_error)
    // {
    //     echo "Erro de conexão!";
    // }
    // else {
    //     echo "Banco de dados MYSQL conectado com sucesso!";
    // }
?>