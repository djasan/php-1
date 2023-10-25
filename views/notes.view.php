<?php require 'partials/header.php'; ?>
<title>Notes</title>
<h1>Notes</h1>
<ul>
  <?php foreach ($notes as $note) : ?>
    <li>
      <a href="/note?id=<?= $note['id'] ?>"> <?= $note['title'] ?> </a>
      <a id="croix" href="/note-delete?id=<?= $note['id'] ?>" onclick="return confirm('Etes vous certain de vouloir supprimer cette note ?')"> X </a>
    </li>
  <?php endforeach; ?>
</ul>
<ul>
  <li>
    <a id="new-note" href="/note-new">Crée une nouvelle note</a>
  </li>
</ul>
<?php require 'partials/footer.php'; ?>