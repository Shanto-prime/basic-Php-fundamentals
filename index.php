<?php

require_once 'functions.php';


// require 'router.php';

// connect to database

$dsn = "mysql:host=localhost;port=3306; dbname=demo-php;";
$pdo = new PDO($dsn , 'root', '11110000');
$statement = $pdo->prepare("SELECT * FROM demos");
$statement->execute();
$demos = $statement->fetchAll(pdo::FETCH_ASSOC);
// dd($demos);

foreach ($demos as $demo) {
    echo $demo['author'] . "<br>";
}

// class person
// {
//     public $name;
//     public $age;
//     public $email;
//     public $password;
//     public $id;

//     public function breathe()
//     {
//         echo $this->name . " is breathing";
//     }
// }

// $person = new person();
// $person->name = "Ymha";
// $person->age = 22;
// $person->email = "y@y.com";
// $person->password = "123456";
// $person->id = 1;

// $person -> breathe();
?>