<?php

$notes = $connexion->query('SELECT * FROM note')->fetch(PDO::FETCH_ASSOC);
