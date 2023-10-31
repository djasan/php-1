<?php require 'views/partials/header.php';
?>
<title>Liste des utilisateurs</title>
<h1>Liste des utilisateurs</h1>
    <form method="GET" action="modif-user">
        <label for="user_id">Sélectionnez un utilisateur :</label>
        <select name="user_id">
            <option value="" selected>Sélectionnez un utilisateur</option>
            <?php foreach ($users as $user) : ?>
                <option value="<?php echo $user['user_id']; ?>"><?php echo $user['name']; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <input type="submit" value="Modifier l'utilisateur">
    </form>
<?php
require 'views/partials/footer.php';
