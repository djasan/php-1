<?php require 'partials/header.php'; ?>

<h2>Ajout d'un nouvelle note :</h2>

<form action="METHOD">
    <label for="title">Titre</label>
    <input type="text" name="title" id="title">
    <textarea name="content" id="content" cols="30" rows="10"></textarea>
    <label for="user">Auteur :</label>
    <select name="user" id="user">
        <option value="" selected>Sélectionnez un auteur</option>
        <?php
        foreach ($users as $user) {
            echo "<option value='" . $user['name'] . "'>" . $user['name'] . "</option>";
        }
        ?>
    </select>
    <input type="submit" value="Ajouter">
</form>

<?php require 'partials/footer.php'; ?>