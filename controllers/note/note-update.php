<?php
require 'models/Database.php';

//USER
$requete = 'SELECT user_id, name FROM user';
$users = $connexion->query($requete)->fetchAll();

//NOTE
$id = $_GET['id'];

$note = $connexion->prepare('SELECT note.*, user.name AS author_name FROM note LEFT JOIN user ON note.user_id = user.user_id WHERE note.id = :id');
$note->bindParam(':id', $id);
$note->execute();
$note = $note->fetch();



//VALIDATION DU FORMULAIRE
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $content = trim(filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $user = filter_var($_POST['user'], FILTER_SANITIZE_NUMBER_INT);

    if (strlen($title) >= 100 || strlen($title) === 0 || strlen($content) >= 1000 || strlen($content) === 0) {
        $errors[] = 'Titre ou contenu trop long !';
    }

    if (empty($user)) {
        $errors[] = 'Veuillez sélectionner un auteur.';
    }

    if (empty($errors)) {
        $noteNew = $connexion->prepare('
            INSERT INTO note (title, content, user_id)
            VALUES (:title, :content, :user_id)
        ');
        $noteNew->bindParam(':title', $title, PDO::PARAM_STR);
        $noteNew->bindParam(':content', $content, PDO::PARAM_STR);
        $noteNew->bindParam(':user_id', $user, PDO::PARAM_INT);
        $noteNew->execute();

        $lastInsertId = $connexion->lastInsertId();
        if ($lastInsertId) {
            header('Location: /notes');
            exit();
        }
    } else {
        abort();
    }
}

require 'views/note-update.view.php';
