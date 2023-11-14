<?php require 'views/partials/header.php'; ?>

<h2>Ajout d'une nouvelle note :</h2>

<form method="POST" enctype="multipart/form-data">
    <label for="title">Titre</label>
    <input type="text" name="title" id="title" value="<?php if (isset($_POST['title'])) echo htmlspecialchars($_POST['title']); ?>">
    <textarea name="content" id="content" cols="30" rows="10"><?php if (isset($_POST['content'])) echo htmlspecialchars($_POST['content']); ?></textarea>
    <label for="user">Auteur :</label>
    <select name="user" id="user">
        <option value="" selected>Sélectionnez un auteur</option>
        <?php foreach ($users as $user) : ?>
            <option value="<?= $user['user_id'] ?>">
                <?= $user['name'] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <label for="image">Image :</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input id="submit" type="submit" value="Confirmer">
</form>

<?php
if (isset($errors) && !empty($errors)) {
    foreach ($errors as $error) {
        echo '<p class="error">' . $error . '</p>';
    }
}

require 'views/partials/footer.php'; ?>