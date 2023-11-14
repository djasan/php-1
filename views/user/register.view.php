<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="public/assets/css/register.css">
</head>

<body>
    <div id="login-box">
        <div class="left">
            <h1>Sign up</h1>
            <form method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="text" name="email" placeholder="E-mail" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" name="signup_submit" value="Sign me up">
            </form>
        </div>
    </div>
</body>
<?php require 'views/partials/footer.php'; ?>