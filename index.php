<?php

require_once 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controller/index.php',
    '/about' => 'controller/about.php',
    '/contact' => 'controller/contact.php'
];





if (array_key_exists($uri, $routes)) {
    require_once $routes[$uri];
} else {
    http_response_code(404);
    require_once 'views/404.php';
    die();
}