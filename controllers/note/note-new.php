<?php
require 'models/Database.php';

$requete = 'SELECT user_id, name FROM user';
$users = $connexion->query($requete)->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    $errors = [];
    //$errors = '';

    $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $content = trim(filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $user = trim(filter_var($_POST['user'], FILTER_SANITIZE_NUMBER_INT));

    if (strlen($title) === 0) :
        $errors[] = 'Titre vide !!!';
    endif;

    if (strlen($title) >= 100) :
        $errors[] = 'Titre trop long !!!';
    endif;

    if (strlen($content) === 0) :
        $errors[] = 'Contenu vide !!!';
    endif;

    if (strlen($content) >= 1000) :
        $errors[] = 'Contenu supérieur à 1000 caratéres !!!';
    endif;

    if (empty($_POST['user']) || strlen($_POST['user'] === 0)) :
        $errors[] = 'Aucun auteur séléctionné !!!';
    endif;

    if (empty($errors)) :
        $noteNew = $connexion->prepare('INSERT INTO note (title,content,user_id) VALUES (:title , :content , :user_id)');

        $noteNew->bindValue(':title', $title, PDO::PARAM_STR);
        $noteNew->bindValue(':content', $content, PDO::PARAM_STR);
        $noteNew->bindValue(':user_id', $user, PDO::PARAM_INT);

        $noteNew->execute();

        $lastInsertId = $connexion->lastInsertId();
        if ($lastInsertId) :
            header('Location: /notes');
            exit();
        else :
            abort();
        endif;
    endif;

endif;
include 'views/note/note-new.view.php';
