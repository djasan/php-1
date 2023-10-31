<?php
require 'models/Database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user_id"];
    $newName = $_POST["name"];
    $newEmail = $_POST["email"];

    $update_query = "UPDATE `user` SET `name` = :name, `email` = :email WHERE `user_id` = :user_id";
    $stmt = $connexion->prepare($update_query);
    $stmt->bindParam(':name', $newName);
    $stmt->bindParam(':email', $newEmail);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();

    header("Location: users");
    exit;
}

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    $stmt = $connexion->prepare("SELECT * FROM user WHERE user_id = :user_id");
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        header("Location: users");
        exit;
    }
}

require 'views/user/edit_user.view.php';
