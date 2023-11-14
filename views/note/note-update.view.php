<?php require 'views/partials/header.php'; ?>

<h2>Modifier cette note</h2>
<form method="POST" enctype="multipart/form-data">
    <label for="title">Titre :</label>
    <input type="text" name="title" id="title" value="<?= isset($_POST['title']) ? $_POST['title'] : $noteUpdate['title'] ?>">
    <label for="content">Contenu :</label>
    <textarea name="content" id="content" cols="30" rows="10"><?= isset($_POST['content']) ? $_POST['content'] : $noteUpdate['content'] ?></textarea>
    <label for="author">Auteur :</label>
    <select name="author" id="author">
        <option value=""></option>

        <?php foreach ($users as $user) : ?>
            <option value="<?= $user['user_id'] ?>" <?= $noteUpdate['user_id'] === $user['user_id'] ? 'selected' : '' ?>>
                <?= $user['name'] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <label for="fileToUpload">Modifier l'image :</label>
    <?php if (!empty($noteUpdate['file_name'])) : ?>
    <img src="uploads/<?= $noteUpdate['file_name'] ?>" alt="Image actuelle de la note" style="max-width: 200px;"> <?php endif; ?>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Modifier">
</form>
<?php
if (isset($errors) && !empty($errors)) :
    foreach ($errors as $error) :
?>
    <p class="error"><?= $error ?></p>    
<?php
    endforeach;
endif;
?>

<?php require 'views/partials/footer.php' ?>
