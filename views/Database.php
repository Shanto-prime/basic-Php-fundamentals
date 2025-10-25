<?php
class Database
{

    public $connection;

    public function __construct()
    {
        echo "Connected to database" . "<br>";
        $dsn = "mysql:host=localhost;port=3306; dbname=demo-php;";
        $this -> connection = new PDO($dsn, 'root', '11110000');
    }
    public function query($query = "SELECT * FROM demos")
    {
        // connect to database

        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}
