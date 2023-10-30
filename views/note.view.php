<?php require 'partials/header.php'; ?>
<h1>Notes :</h1>
<hr>
<h2><?= $note['title'] ?></h2>
<p><?= $note['content'] ?></p>
<p>Publiée le : <?= $note['created_at'] ?> par : <?= $note['author_name'] ?> </p>

<p><a href="/note-update?id=<?= $note['id'] ?>" class="btn">Modifier cette note</a></p>

<p><a href="/note-delete?id=<?= $note['id'] ?>" onclick="return confirm('Etes vous certain de vouloir supprimer cette note ?')">Supprimer cette note</a></p>
<p><a href="/notes">Retour à la liste des notes</a></p>
</body>

</html>
<?php require 'partials/footer.php'; ?>