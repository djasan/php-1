<?php
// phpinfo()
require './fonction.php';

//Tableau indexé :

$titre = "Operateur php";

// $tab1 = [];
// $notes = [12, 14, 6, 10];

// $tab1[] = 'Janvier';
// $tab1[] = 45;
// $tab1[] = true;

// array_push($tab1, 'Voiture', 10.5, [45, true, 'Truc']);

// $tabFusion = array_merge($tab1, $notes);

// dd($tabFusion[5][2]);

//Tableau associatif :


// $fruits = [
//     'banane' => 'jaune',
//     'pomme' => 'rouge',
//     'kiwi' => 'vert'
// ];

// dd($fruits['pomme']);

// $fruits['poire'] = 'vert';

// dd($fruits);

// $chaine = implode(",", $fruits);
// $fruit2 = explode(",", $chaine);

// $phrase = "Une petite phrase courte";
// $tabPhrase = explode(" ",$phrase);
// dd($tabPhrase);

// $planetes = ['mars', 'terre', 'uranus', 'venus', 'jupiter', 'mercure'];
// $planetes2 = [
//     'm' => 'mars',
//     't' => 'terre',
//     'u' => 'uranus',
//     'v' => 'venus',
//     'j' => 'jupiter',
//     'm' => 'mercure'
// ];

// // dbug($planetes);
// dbug($planetes2);

// ksort($planetes);
// dd($planetes);

/*
    sort
    asort
    rsort
    ksort
    arsort
    krsort
    */


// $tab = [];
// $tab[] = ['A', 'B', 'C'];
// $tab[] = ['Q', 'R', 'T'];
// $tab[] = ['E', 'U', 'P', 'I'];

// Ecrire le mot CEPPIC avec les lettres du tableau $tab

// dd($tab[0][2].$tab[2][0].$tab[2][2].$tab[2][2].$tab[2][3].$tab[0][2]);


// $person1 = [
//     'nom' => 'Carle',
//     'prenom' => 'Awa',
//     'email' => 'cawa@wahoo.com'
// ];

// $people = [
//     $person1,
//     [
//         'nom' => 'Mourad',
//         'prenom' => 'Michel',
//         'email' => 'moumi@caramail.com'
//     ],
//     [
//         'nom' => 'Dupond',
//         'prenom' => 'Lucie',
//         'email' => 'ludo@gimayle.com'
//     ]
// ];


// Afficher les phrases suivantes :
// Le nom de Lucie est Dupond.
// L'email de Michel MOURAD est moumi@caramail.com.

// dbug($people);

// $person2 = $people[2];
// dbug("Le nom de " . $person2['prenom'] . " est " . $person2['nom'] . ".");

// $person1 = $people[1];
// dbug("L'email de " . $person1['prenom'] . ' ' . $person1['nom'] . ' est '  . $person1['email'] . ".");

// $jsonPeople = json_encode($people);
// dd($jsonPeople);

$jsonPerson = '{
    "nom" : "Pontpasneuf",
    "prenom" : "Albert",
    "email" : "pontal@free.fr",
    "couleur" : ["rouge", "vert", "jaune"],
    "image" : "https://ximg.es/128x128/800/fff"
}';

$jsonPersonArrayPhp = json_decode($jsonPerson, true);

// dbug($jsonPersonArrayPhp);

//Aficher une card pour cette personne

/*
?>
<figure>
    <img src="<?=$jsonPersonArrayPhp['image'] ?>">
    <figcaption>
        <ul>
            <li> <?= $jsonPersonArrayPhp['prenom'] ?> <?= $jsonPersonArrayPhp['nom'] ?></li>
            <li> <?= $jsonPersonArrayPhp['email'] ?></li>
        </ul>
    </figcaption>
    </img>
</figure>

<?php 
*/

$urlApi = "https://pokeapi.co/api/v2/pokemon/ditto";
$jsonApi = file_get_contents($urlApi);
$jsonApiArray = json_decode($jsonApi, true);
// dbug($jsonApiArray);

// dd($jsonApiArray['sprites']['back_default']);

?>

<img src="<?=$jsonApiArray['sprites']['back_default']?>" />


<?php


// require './index.view.php';