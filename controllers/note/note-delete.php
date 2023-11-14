<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require 'models/Database.php';

$id = $_GET['id'];

if (isset($id)) {
    $deleteNote = $connexion->prepare('DELETE FROM note WHERE id = :id');
    $deleteNote->bindParam(':id', $id);

    if ($deleteNote->execute()) {
        header('Location: /notes');
        exit;
    } else {
        echo "Error.";
    }
}

require 'views/note/note-delete.view.php';
