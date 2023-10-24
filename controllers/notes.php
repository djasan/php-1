<?php
require 'models/Database.php';

$notes = $connexion->query('SELECT * FROM note')->fetchAll(PDO::FETCH_ASSOC);


require 'views/notes.view.php';
