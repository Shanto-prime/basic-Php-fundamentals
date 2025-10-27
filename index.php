<?php

require_once 'functions.php';

require 'views/Database.php';

// require 'router.php';


$db = new Database();

$demos = $db->query("SELECT * FROM demos where id =5 ")->fetch(pdo::FETCH_ASSOC);


dd($demos["title"]);

// foreach ($demos as $demo) {
//     echo $demo['title'] . " by " . $demo['author'] . "<br>";
// }
