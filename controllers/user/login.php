<?php
require 'models/Database.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $connexion->prepare("SELECT * FROM user WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_name'] = $user['name']; 
            header("Location: /users");
            exit();
        } else {
            $errors[] = "Mot de passe incorrect";
        }
    } else {
        $errors[] = "Utilisateur non trouvé";
    }
}

include 'views/user/login.view.php';
?>
