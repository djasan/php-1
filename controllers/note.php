<?php

require 'models/Database.php';

$id = $_GET['id'];

$note = $connexion->prepare('SELECT * FROM note WHERE id = :id');
$note->bindParam(':id', $id);
$note->execute();
$note = $note->fetch(PDO::FETCH_ASSOC);


require 'views/note.view.php';
