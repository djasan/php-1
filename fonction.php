<?php

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

function calcul($a = 10, $b = 15)
{
    return $a + $b;
}

echo calcul(10);

//Creer une fonction qui calcul le prix TTC en lui passant un prix HT et la TVA

//calculPrixTTC