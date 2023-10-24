<?php
require './fonction.php';

// dd($SERVER);
// dd($_SERVER['REQUEST_URI']);
// dd(parse_url($_SERVER['REQUEST_URI'])['path']);

$uri = (parse_url($_SERVER['REQUEST_URI'])['path']);

$routes = [
'/php' => 'controllers/index.php',
'/php/conctact' => 'controllers/conctact.php',
'/php/notes' => 'controllers/notes.php',
];

