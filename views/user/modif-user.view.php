<?php require 'views/partials/header.php';
?>
<form method="POST" action="update_user.php">
    <input type="hidden" name="user_id" value="<?php echo $user['user_id']; ?>">
    <label for="name">Nom :</label>
    <input type="text" name="name" value="<?php echo $user['name']; ?>">
    <br>
    <label for="email">Email :</label>
    <input type="text" name="email" value="<?php echo $user['email']; ?>">
    <br>
    <input type="submit" value="Mettre à jour l'utilisateur">
</form>

<?php
require 'views/partials/footer.php';
