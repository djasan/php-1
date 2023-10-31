<?php require 'views/partials/header.php'; ?>

<title>Crée un utilisateur</title>
<h1>Crée un utilisateur</h1>

<form method="POST">
    <label for="name">Nom :</label>
    <input type="text" name="name" required>
    <br>
    <label for="email">Email :</label>
    <input type="email" name="email" required>
    <br>
    <input type="submit" value="Créer">
</form>

<?php require 'views/partials/footer.php'; ?>