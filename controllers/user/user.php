<?php require 'models/Database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    try {
        $insert_query = "INSERT INTO `user` (`name`, `email`) VALUES (:name, :email)";
        $stmt = $connexion->prepare($insert_query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        echo "Utilisateur créé avec succès.";
    } catch (PDOException $e) {
        echo "Erreur lors de la création de l'utilisateur : " . $e->getMessage();
    }
}

require 'views/user/user.view.php';
