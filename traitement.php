<?php
require './fonction.php';

// dbug($_GET);
// dbug($_POST);
// dbug($_REQUEST);

// dbug(htmlspecialchars($_GET['nom']));
dbug(htmlentities($_GET['nom']));

// if (isset($_POST['submitted'])) :
if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    echo "Votre nom est : ", $_POST['nom'], '<br>';
    echo "Votre email est : ", $_POST['email'], '<br>';
    echo "Votre commentaire est : ", $_POST['commentaire'], '<br>';
    echo "Votre niveau est : ", $_POST['niveau'], '<br>';
    $competences = $_POST['competences'];
    foreach ($competences as $competence) {
        if ($competence === 'css') {
            echo "Vous avez la compétence : CSS", "<br>";
        }
    }
    foreach ($competences as $competence) {
        if ($competence === 'javascript') {
            echo "Vous avez la compétence : JavaScript", "<br>";
        }
    }
    foreach ($competences as $competence) {
        if ($competence === 'php') {
            echo "Vous avez la compétence : PHP", "<br>";
        }
    }
    foreach ($competences as $competence) {
        if ($competence === 'python') {
            echo "Vous avez la compétence : Python", "<br>";
        }

    }
endif;
