<?php 
require 'models/Database.php';

$select_query = "SELECT * FROM `user`";
$stmt = $connexion->query($select_query);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];

        $delete_query = "DELETE FROM `user` WHERE `user_id` = :user_id";
        $delete_stmt = $connexion->prepare($delete_query);
        $delete_stmt->bindParam(':user_id', $user_id);
        $delete_stmt->execute();

        header("Location: users");
        exit;
    }
}

include 'views/user/users.view.php';