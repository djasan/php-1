<?php require 'partials/header.php'; ?>
<h1>Notes :</h1>
<h2><?= $note['title'] ?></h2>
<p><?= $note['content'] ?></p>
<p>Publiée le : <?= $note['created_at'] ?> par : <?= $note['author_name'] ?> </p>

<p><a href="/note-delete?id=<?=$note['id']?>">Supprimer cette note</a></p>
<p><a href="/notes">Retour à la liste des notes</a></p>
</body>
</html>
<?php require 'partials/footer.php'; ?>