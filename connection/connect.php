<!-- Arquivo de Conexão com o banco de Dados MYSQL -->

<?php 
    // Variável que contém o Host do servidor do Banco de Dados.
    $dbHostname = '127.0.0.1';
    // Variável que contém o nome de usuário do servidor do Banco de Dados.
    $dbUsername = 'root';
    // Variável que contém a senha do Banco de Dados.
    $dbPassword = "";
    // Variável que contém o nome Banco de Dados.
    $dbName = "MenuWeb";
    
    // Variável que contém o método 'mysqli', capaz de usar todas as variáveis anteriores como argumento e estabelecer a conexão com o servidor do Banco de Dados.
    $connection = new mysqli($dbHostname, $dbUsername, $dbPassword, $dbName);

    // Estrutura condicional para testar a conexão.
    // if($connection->connect_error)
    // {
    //     echo "Erro de conexão!";
    // }
    // else {
    //     echo "Banco de dados MYSQL conectado com sucesso!";
    // }
?>