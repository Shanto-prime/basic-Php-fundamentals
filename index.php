<?php

require_once 'functions.php';


// require 'router.php';


$db = new Database();

$demos = $db->query("SELECT * FROM demos ")->fetch(pdo::FETCH_ASSOC);


dd($demos["title"]);

// foreach ($demos as $demo) {
//     echo $demo['title'] . " by " . $demo['author'] . "<br>";
// }
