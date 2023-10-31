<?php
require 'views/partials/header.php';
?>

<table border="1">
    <tr>
        <th>Note ID</th>
        <th>User ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Actions</th>
    </tr>

    <?php
    if (!empty($notes)) {
        foreach ($notes as $note) {
            echo '<tr>';
            echo '<td>' . $note['Note_ID'] . '</td>';
            echo '<td>' . $note['User_ID'] . '</td>';
            echo '<td>' . $note['Title'] . '</td>';
            echo '<td>' . $note['Content'] . '</td>';
            echo '<td>
                        <button><a href="voir.php?id=' . $note['Note_ID'] . '">Voir</a></button>
                        <button><a href="modifier.php?id=' . $note['Note_ID'] . '">Modifier</a></button>
                        <button><a href="supprimer.php?id=' . $note['Note_ID'] . '">Supprimer</a></button>
                      </td>';
            echo '</tr>';
        }
    }
    ?>

</table>

<?php
require 'views/partials/footer.php'; ?>