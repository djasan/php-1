<?php
require 'models/Database.php';

$users = $connexion->query('SELECT * FROM user')->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = filter_var(($_POST['title']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $content = filter_var(($_POST['content']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $user = filter_var(($_POST['user']), FILTER_SANITIZE_NUMBER_INT);

    $noteNew = $connexion->prepare('
        INSERT INTO note (title, content, user_id)
        VALUES (:title, :content, :user_id)
    ');
    $noteNew->bindParam(':title', $_POST['title']);
    $noteNew->bindParam(':content', $_POST['content']);
    $noteNew->bindParam(':user_id', $_POST['user']);
    $noteNew->execute();

    header('Location: /notes');
}

include 'views/note-new.view.php';
