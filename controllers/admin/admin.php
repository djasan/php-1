<?php
require 'models/Database.php';

$sql = "SELECT note.id AS Note_ID, note.user_id AS User_ID, note.title AS Title, note.content AS Content FROM note";

try {
    $result = $connexion->query($sql);

    if ($result) {
        $notes = $result->fetchAll();
    } else {
        $notes = [];
        echo "Aucun résultat trouvé dans la table note.";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}



require 'views/admin/admin.view.php';

