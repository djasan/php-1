<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require 'models/Database.php';

$notes = $connexion->query('SELECT * FROM note ORDER BY id DESC')->fetchAll();


require 'views/note/notes.view.php';
