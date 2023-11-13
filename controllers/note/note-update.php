<?php
require 'models/Database.php';

$requete = "SELECT user_id, name FROM user";
$users = $connexion->query($requete)->fetchAll();

if (!isset($_GET['id']) || !is_numeric($_GET['id']) || empty($_GET['id'])) {
    abort();
}

$id = $_GET['id'];

$noteUpdate = $connexion->prepare('SELECT n.id, u.user_id, n.title, n.content, n.created_at, u.name, n.file_name 
                                   FROM note AS n
                                   INNER JOIN user AS u ON n.user_id = u.user_id
                                   WHERE n.id = :id');

$noteUpdate->bindParam(':id', $id);
$noteUpdate->execute();
$noteUpdate = $noteUpdate->fetch();

if (empty($noteUpdate) || $noteUpdate === false) {
    abort();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $content = trim(filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $author = trim(filter_var($_POST['author'], FILTER_SANITIZE_NUMBER_INT));

    if (strlen($title) === 0) {
        $errors[] = 'Titre vide !!!';
    }

    if (strlen($title) >= 100) {
        $errors[] = 'Titre trop long !!!';
    }

    if (strlen($content) === 0) {
        $errors[] = 'Contenu vide !!!';
    }

    if (strlen($content) >= 1000) {
        $errors[] = 'Contenu supérieur à 1000 caratéres !!!';
    }

    if (empty($_POST['author']) || strlen($_POST['author'] === 0)) {
        $errors[] = 'Aucun auteur séléctionné !!!';
    }

    if (empty($errors)) {
        $fileName = basename($_FILES["fileToUpload"]["name"]);
        $target_dir = "uploads/";

        if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {
            $oldFileName = $noteUpdate['file_name'];
            if (file_exists('uploads/' . $oldFileName)) {
                unlink('uploads/' . $oldFileName);
            }

            $target_file = $target_dir . $fileName;
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $successMessage = "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            } else {
                $errors[] = "Sorry, there was an error uploading your file.";
            }
        }

        if (empty($errors)) {
            $noteNew = $connexion->prepare('UPDATE note SET title = :title, content = :content, user_id = :user_id, file_name = :file_name WHERE id = :id');

            $noteNew->bindValue(':title', $title, PDO::PARAM_STR);
            $noteNew->bindValue(':content', $content, PDO::PARAM_STR);
            $noteNew->bindValue(':user_id', $author, PDO::PARAM_INT);
            $noteNew->bindValue(':file_name', $fileName, PDO::PARAM_STR);
            $noteNew->bindValue(':id', $id, PDO::PARAM_INT);

            $noteNew->execute();
            header('Location: /notes');
            exit();
        }
    }
}

include 'views/note/note-update.view.php';
