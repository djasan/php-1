<?php require 'models/Database.php';

session_start();

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    $select_query = "SELECT * FROM `user` WHERE `user_id` = :user_id";
    $stmt = $connexion->prepare($select_query);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "L'utilisateur n'existe pas.";
        exit;
    }
} else {
    echo "ID de l'utilisateur non fourni.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    try {
        $update_query = "UPDATE `user` SET `name` = :name, `email` = :email WHERE `user_id` = :user_id";
        $stmt = $connexion->prepare($update_query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        header("Location: /");
        exit;
        echo "Utilisateur mis à jour avec succès.";
    } catch (PDOException $e) {
        echo "Erreur lors de la mise à jour de l'utilisateur : " . $e->getMessage();
    }
}
require 'views/user/modif-user.view.php';
