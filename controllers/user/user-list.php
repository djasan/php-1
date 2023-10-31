<?php require 'models/Database.php';

session_start();
$select_query = "SELECT * FROM `user`";
$stmt = $connexion->query($select_query);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);


require 'views/user/user-list.view.php';