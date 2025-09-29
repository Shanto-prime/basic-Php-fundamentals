<?php

require_once 'functions.php';


// require 'router.php';

class Database
{
    public function query($query = "SELECT * FROM demos")
    {
        // connect to database
        echo "Connected to database" . "<br>";
        $dsn = "mysql:host=localhost;port=3306; dbname=demo-php;";
        $pdo = new PDO($dsn, 'root', '11110000');
        $statement = $pdo->prepare($query);
        $statement->execute();
        return $statement->fetchAll(pdo::FETCH_ASSOC);
    }
}

$db = new Database();

$demos = $db->query();



foreach ($demos as $demo) {
    echo $demo['title'] . " by " . $demo['author'] . "<br>";
}
