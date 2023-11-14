<?php
require 'views/partials/header.php';
?>
<h1>Dashboard</h1>
<button><a href="/note-new">Crée une nouvelle note</a></button>
<table border="1">
    <tr>
        <th>Note ID</th>
        <th>User ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>User</th>
        <th>Actions</th>
    </tr>

    <?php if (!empty($notes)) : ?>
        <?php foreach ($notes as $note) : ?>
            <tr>
                <td><?php echo $note['Note_ID']; ?></td>
                <td><?php echo $note['User_ID']; ?></td>
                <td><?php echo $note['Title']; ?></td>
                <td><?php echo $note['Content']; ?></td>
                <td><?php echo $note['Name']; ?></td>
                <td class="actions">
                    <button><a href="note?id=<?php echo $note['Note_ID']; ?>">Voir</a></button>
                    <button><a href="note-update?id=<?php echo $note['Note_ID']; ?>">Modifier</a></button>
                    <button><a href="note-delete?id=<?php echo $note['Note_ID']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette note ?')">Supprimer</a></button>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="6">Aucune note trouvée.</td>
        </tr>
    <?php endif; ?>

</table>

<?php require 'views/partials/footer.php'; ?>