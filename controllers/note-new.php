<?php
require 'models/Database.php';

$usersQuery = $connexion->prepare('SELECT name FROM user');
$usersQuery->execute();
$users = $usersQuery->fetchAll(PDO::FETCH_ASSOC);

require 'views/note-new.view.php';
