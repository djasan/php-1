<?php require 'partials/header.php'; ?>

<h2>Modification de la note :</h2>

<form method="POST">
    <label for="title">Titre</label>
    <input type="text" name="title" id="title" value="<?= isset($_POST['title']) ? $_POST['title'] : $noteUpdate['title'] ?>">
    <textarea name="content" id="content" cols="30" rows="10"><?= isset($_POST['content']) ? $_POST['content'] : $noteUpdate['content'] ?></textarea>
    <label for="user">Auteur :</label>
    <select name="user" id="user">
        <option value="" selected>Sélectionnez un auteur</option>
        <?php foreach ($users as $user) : ?>
            <option value="<?= $user['user_id'] ?>" <?php if (isset($_POST['user']) && $_POST['user'] == $user['user_id']) echo 'selected'; ?>>
                <?= $user['name'] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input id="submit" type="submit" value="Modifier">
</form>

<?php
if (isset($errors) && !empty($errors)) {
    foreach ($errors as $error) {
        echo '<p class="error">' . $error . '</p>';
    }
}
require 'partials/footer.php'; ?>