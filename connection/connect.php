<!-- Arquivo de Conexão com o banco de Dados MYSQL -->

<?php 
   define('HOST','127.0.0.1');
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
            $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
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