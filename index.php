<?php

require './fonction.php';

$titre = "Operateur php";

$x = 4;
$y = 2;
$z = 5;

/*
Les Operateurs :

+
-
*
/
**
%

*/

// $calcul = $x + $y;
// $calcul = $x - $y;
// $calcul = $x * $y;
// $calcul = $x / $y;
// $calcul = $x ** $y;
// $calcul = $x % $y;
// $calcul = ($x + $z) * $y;

//$x += 5; // $x = $x + 5
//$x -=5; // $x = $x - 5
//$x *= 5; // $x = $x * 5
//$x /= 5; // $x = $x / 5
//$x **= 5; // $x = $x ** 5
//$x %= 5; // $x = $x % 5

// dd($x);

// $i =0;
// $i++; // $i = $i + 1

// $i--; // $i = $i - 1

// dd($i);

// $anneeDeNaissance = 1990;

// $age = date("Y") - $anneeDeNaissance;
// dd($age);

//Calcule le prix TTC 
$prixHT = 34;
$tva = 10;

$prixTTC = $prixHT + ($tva * $prixHT) / 100;

dd($prixTTC);


require './index.view.php';
