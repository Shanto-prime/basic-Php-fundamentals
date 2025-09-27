<?php

require_once 'functions.php';


// require 'router.php';

// connect to database

$dsn = "mysql:host=localhost;port=3306; dbname=demo-php;";
$pdo = new PDO($dsn , 'root', '11110000');
$statement = $pdo->prepare("SELECT * FROM demos");
$statement->execute();
$demos = $statement->fetchAll(pdo::FETCH_ASSOC);

foreach ($demos as $demo) {
    echo $demo['author'] . "<br>";
}

?>