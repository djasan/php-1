<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="public/assets/css/register.css">
</head>

<body>
    <div id="login-box">
        <div class="left">
            <h1>Login</h1>
            <form method="post">
                <input type="text" name="email" placeholder="E-mail" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" name="login_submit" value="Login">
            </form>
        </div>
    </div>
    <?php if (!empty($errors)) : ?>
    <ul>
        <?php foreach ($errors as $error) : ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</body>
<?php require 'views/partials/footer.php'; ?>