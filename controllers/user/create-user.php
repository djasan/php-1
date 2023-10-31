<?php
require 'models/Database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];


    if (!empty($name) && !empty($email)) {

        $insert_query = "INSERT INTO `user` (`name`, `email`) VALUES (:name, :email)";
        $stmt = $connexion->prepare($insert_query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);

        if ($stmt->execute()) {
            header("Location: users");
            exit;
        } else {
            echo "Erreur lors de l'insertion de l'utilisateur.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}

require 'views/user/create-user.view.php';
