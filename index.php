<?php 
require './fonctions.php'; 

// dbug($_GET);
dbug($_POST);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Formulaire</title>
</head>

<body>
    <h1>Formulaire</h1>
    <form action="" method="POST">
        <label for="nom">Nom :
        <input type="text" name="nom">
        </label>
        <label for="email">Email :
        <input type="email" name="email">
        </label>
        <input type="submit" value="Valider">
    </form>
</body>

</html>