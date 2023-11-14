<?php require 'views/partials/header.php'; ?>

<title>Modifier l'utilisateur</title>
<h1>Modifier l'utilisateur</h1>


<form method="POST">
    <input type="hidden" name="user_id" value="<?php echo $user['user_id']; ?>">
    <label for="name">Nom :</label>
    <input type="text" name="name" value="<?php echo $user['name']; ?>">
    <br>
    <label for="email">Email :</label>
    <input type="email" name="email" value="<?php echo $user['email']; ?>">
    <br>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" value="Enregistrer les modifications">
</form>


<div class="confirmation">
    <?php
    if (isset($_SESSION['confirmation_message'])) {
        echo $_SESSION['confirmation_message'];
        unset($_SESSION['confirmation_message']);
    }
    ?>
</div>

<?php require 'views/partials/footer.php'; ?>