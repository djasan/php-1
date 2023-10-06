<?php
// phpinfo()
require './fonction.php';

$titre = "Operateur php";

$tab1 = [];
$notes = [12, 14, 6, 10];

$tab1[] = 'Janvier';
$tab1[] = 45;
$tab1[] = true;

array_push($tab1, 'Voiture', 10.5, [45, true, 'Truc']);

$tabFusion = array_merge($tab1, $notes);

dd($tabFusion[5][2]);


require './index.view.php';
