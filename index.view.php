<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1><?= $titre ?></h1>
    <?php

    // dbug($planetes2);

    /* foreach($planetes as $planete) {
    echo ucwords($planete) . '<br>';
}
 */
    // foreach($planetes2 as $tralala) {
    //     echo ucwords($tralala) . '<br>';
    // }

    /* foreach ($planetes as $clef => $valeur) {
        echo $clef . ' : ' . $valeur . '<br>';
    }

    echo '<hr>';

    foreach ($planetes2 as $clef => $valeur) {

        echo $clef . ' : ' . $valeur . '<br>';
    }

    foreach ($planetes2 as $clef => $valeur) :
        echo $clef . ' : ' . $valeur . '<br>';
    endforeach; */

// Afficher dans une liste ul toutes les données de ce user avec for each

    dbug($user);

    foreach($user as $key => $value) :
        echo $key . ' : ' . $value;
    endforeach;

    ?>
</body>

</html>