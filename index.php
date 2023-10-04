<?php

// include './header.php';
// include_once './header.php';
require './fonction.php';
require './header.php';

// Un commentaire sur une ligne
/* Un commentaire sur plusieurs lignes */

// echo "<h1>Ceppic PHP</h1>";


// $variable = 'une variable';
// $Variable = 'une Variable';

// echo $variable . $Variable;
// echo $variable . " " . $Variable;
// echo $varible . ' ' . $Variable;
// echo "$variable";
// echo '$variable';
// echo "$variable . $Variable";
// echo '$variable . $Variable';

/* $camelCase = 'une variable en camel case';
$snake_case = 'une variable en snake case';
$kebab-case = 'une variable en kebab case';
$PascalCase = 'une variable en pascal case'; */

// $nombre = 45;
// $nombreDecimal = 10.5;
// $booleen = false;

// print_r($nombre);
// var_dump($nombre);
// var_dump($nombreDecimal);
// var_dump($booleen);
// print_r($variable);
// var_dump($variable);

/* $fruit1 = 'Pomme';
$fruit2 = 'Banane';

var_dump($fruit1);

echo "<p>$fruit1<br>$fruit2</p>";
echo "<p>$fruit1" . "<br>" . "$fruit2</p>";
echo '<p>' . $fruit1 . '<br>' . $fruit2 . '</p>'; */

// Aujourd'hui il fait beau
// echo "Aujourd'hui il fait beau";
// echo 'Aujourd\'hui il fait beau';

/* $resultat = '';
$resultat .= '<h1>';
$resultat .= 'Cours PHP';
$resultat .= '</h1>';
echo "$resultat"; */

// echo $titre;

// $tableau = array();
$tableau = ['groupe', 
23, 
4.5,
false,
[1,2,3,true]];

// dd($tableau);
// debug($titre)

define('USER', 'Jon Doe');
define('NOTES',[12,16,2,6]);
define ('ONLINE', true);
define ('AGE', 32);

dd(AGE);


?>
<!-- <h3>/<?//= $titre ?></h3> -->

<?php

require './footer.php';

// echo $titre;