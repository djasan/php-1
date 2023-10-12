<?php
declare(strict_types=1);

function dbug($value)
{
    echo '<pre style="background-color:black;
    color:white;overflow: auto;padding: 10px;">';
    print_r($value);
    // var_dump($value);
    echo '</pre>';
}

function dd($value)
{
    dbug($value);
    die('Script php arrété !');
}

/* function calcul($a, $b)
{
    // $c = $a + $b;
    // return $c;
    // echo 'Calcul';
    return $a + $b;
}

echo calcul(10, 12);

 */

/* function calcul($a = 10, $b = 15)
{
    return $a + $b;
}

echo calcul(10);
 */

//Creer une fonction qui calcul le prix TTC en lui passant un prix HT et la TVA
//$calculPrixTTC

/* 
function calculPrixTTC($prixHT, $tva)
{
    $prixTTC = $prixHT + ($prixHT * $tva / 100);
    return $prixTTC;
}

$prixHT = 25.5;
$tva = 15;
$prixTTC = calculPrixTTC($prixHT, $tva);

echo "Le prix TTC est de : $prixTTC";

echo "<br>";

//Creer une fonction qui calcul l'age d'une personne en lui donnant sa date de naissance
//$calculAge

function calculAge($dateNaissance)
{
    $anneEnCours = date("Y");
    return $anneEnCours - $dateNaissance;
}

$dateNaissance = "2002";
$age = calculAge($dateNaissance);

echo "L' âge de la personne est : $age ans";
 */

/* $calcul = function ($nb)
{
 return $nb + 1;
};

echo $calcul(25); */

/* 
 function calcul(int | float $a, int | float $b) : int | float
{
    return $a + $b;
}

echo calcul(2.6,5); */

