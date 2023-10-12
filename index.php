<?php
require './fonction.php';

// dd($SERVER);
// dd($_SERVER['REQUEST_URI']);
// dd(parse_url($_SERVER['REQUEST_URI'])['path']);

$uri = (parse_url($_SERVER['REQUEST_URI'])['path']);

if ($uri === '/php/') :
    header('./php/index.php');
    die();
elseif ($uri === '/php/contact.php/') :
    header('./php/contact.php');
    die();
endif;
