<!-- Arquivo de Conexão com o banco de Dados MYSQL -->

<?php 
   define('HOST','localhost');
   define('DATABASENAME','MenuWeb');
   define('USER','root');
   define('PASSWORD','');

   class Connect {
    protected $connection;

    function __construct()
    {
        $this->connectDatabase();
    }

    function connectDatabase()
    {
        try {
            $this->connection = new PDO('mysql:hos='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
            // echo "Banco de Dados MYSQL conectado com sucesso!";
        }
        catch (PDOException $e)
        {
            echo "Error!". $e->getMessage();
            die();
        }
    }
   }

   $testConnection = new Connect();
?>