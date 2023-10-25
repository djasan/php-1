<?php

$user = 'root';
$pass = '';
$connexion = new PDO('mysql:host=localhost;dbname=notes', $user, $pass, [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);

