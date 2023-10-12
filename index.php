<?php
require './fonction.php';

// dbug($_GET);
dbug($_POST);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Formulaire</title>
</head>

<body>
    <h1>Formulaire</h1>
    <form action="" method="POST">
        <label for="nom">Nom :
            <input type="text" name="nom" placeholder="Votre nom">
        </label><br>
        <label for="email">Email :
            <input type="email" name="email" placeholder="Votre email">
        </label><br>
        <label for="commentaire"> Commentaire :</label>
        <textarea name="commentaire" id="commentaire" cols="30" rows="10"></textarea>
        <label for="niveau">
            Niveau :
            <input type="radio" name="niveau" value="debutant">Débutant
            <input type="radio" name="niveau" value="Intermediaire">Intermediaire
            <input type="radio" name="niveau" value="Expert">Expert
        </label><br>
        <label for="competences">
            Compétences :
            PHP<input type="checkbox" name="competences[]" value="php">
            Python<input type="checkbox" name="competences[]" value="python">
            Css<input type="checkbox" name="competences[]" value="css">
            Javascript<input type="checkbox" name="competences[]" value="Javascript">
        </label><br>
        <input type="submit" name="submitted" value="Valider">
    </form>
</body>
</html>

