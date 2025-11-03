<?php
class Database
{

    public $connection;

    public function __construct()
    {
        $config =[
            'host' => 'localhost',
            'port' => '3306',
            'dbname' => 'demo-php'
        ];

        http_build_query($config);

        echo "Connected to Internet" . "<br>";
        $dsn = "mysql:host={$config['host']};port={$config['port']}; dbname={$config['dbname']};";
        $this -> connection = new PDO($dsn, 'root', '11110000',[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    
    public function query($query = "SELECT * FROM demos")
    {
        // connect to database

        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}
