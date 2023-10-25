<?php
require 'models/Database.php';

$usersQuery = $connexion->prepare('SELECT name FROM user');
$usersQuery->execute();
$users = $usersQuery->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') :
    dd($Post);
endif;

require 'views/note-new.view.php';
