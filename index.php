<?php
require './fonction.php';

$titre = "Boucles php";

/*
/
*
-
+
>
<
<=
>=
==
===
!=
!==
*/

// $age = 10;
$age = 20;

/*
 if($age >= 18) {
     echo 'Peut voter.';
    } else {
     echo 'Ne peut pas voter.';

 }
*/

/*
if ($age >= 18) :
    echo 'Peut voter.';
else :
    echo 'Ne peut pas voter.';
endif;
*/

// $heure = 10;
/*
$heure = date('H');

if ($heure <= 12) :
    echo "On est le matin";
elseif ($heure >= 18) :
    echo "On est le soir";
else :
    echo "On est l'après-midi";
endif; */

$a = 20;
$b = 5;

/*
if($b != 3):
    echo 'La variable $b n\'est pas égale à 3';
endif; */

if($b === 5):
    echo 'La variable $b est égale à 5';
endif;


// require './index.view.php';