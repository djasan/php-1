<?php require 'views/partials/header.php'; ?>

<h1>Créer un utilisateur</h1>
<form method="post">
    <label for="name">Nom :</label>
    <input type="text" name="name" id="name" required><br><br>

    <label for="email">Adresse e-mail :</label>
    <input type="email" name="email" id="email" required><br><br>

    <input type="submit" value="Créer l'utilisateur">
</form>

<?php
require 'views/partials/footer.php';
