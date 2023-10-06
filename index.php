<?php
require './fonction.php';

$titre = "Boucles php";

// $planetes = ['mars','terre','uranus','venus','jupiter','mercure'];
// $planetes2 = [
//     'm' => 'mars',
//     't' => 'terre',
//     'v' => 'venus',
//     'j' => 'jupiter',
//     'u' => 'uranus',
// ];

$user = [
    'nom' => 'Doupet Lucien',
    'email' => 'ldoupe@yaya.com',
    'competence' => ['php','react','python']
];

// Afficher dans une liste ul toutes les données de ce user avec foreach

require './index.view.php';