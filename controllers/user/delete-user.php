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
}
?>

<?php require 'views/user/detete-user.view.php';
