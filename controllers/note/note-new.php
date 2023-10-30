<?php
require 'models/Database.php';
$requete = 'SELECT user_id, name FROM user';
$users = $connexion->query($requete)->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') :

    $errors = [];

    $title = trim(filter_var(($_POST['title']), FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $content =  trim(filter_var(($_POST['content']), FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $user = filter_var(($_POST['user']), FILTER_SANITIZE_NUMBER_INT);

    if (strlen($title) >= 100 || strlen($title) === 0 || strlen($content) >= 1000 || strlen($content) === 0) {
        $errors[] = 'Titre ou contenu trop long !';
    }
    
    if (empty($user) || $user == "") {
        $errors[] = 'Veuillez sélectionner un auteur.';
    }

    if (empty($errors)) :
        $noteNew = $connexion->prepare('
        INSERT INTO note (title, content, user_id)
        VALUES (:title, :content, :user_id)
    ');
        $noteNew->bindParam(':title', $_POST['title']);
        $noteNew->bindParam(':content', $_POST['content']);
        $noteNew->bindParam(':user_id', $_POST['user']);
        $noteNew->execute();

        header('Location: /notes');
        exit();
    endif;

endif;

include 'views/note-new.view.php';
