<?php require 'views/partials/header.php';
?>

<h1>Modifier l'utilisateur</h1>
<form method="POST" action="">
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
