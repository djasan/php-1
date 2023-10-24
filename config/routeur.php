<?php

$uriPath = (parse_url($_SERVER['REQUEST_URI'])['path']);

/* $urlToController = match ($uriPath) {
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    default => 'views/404.php',
};

require $urlToController;
exit(); */

function urlToController($uriPath, $routes)
{
    if (array_key_exists($uriPath, $routes)) :
        require $routes[$uriPath];
    else :
        abort();
    endif;
}

function abort()
{
    require 'views/404.php';
    exit();
}

urlToController($uriPath, $routes);
