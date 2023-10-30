<?php require 'partials/header.php'; ?>
<title>Notes</title>
<h1 id="notes">Notes :</h1><hr id="hr1">
<ul>
  <?php foreach ($notes as $note) : ?>
    <li>
      <a href="/note?id=<?= $note['id'] ?>"> <?= $note['title'] ?> </a>
      <a id="croix" href="/note-delete?id=<?= $note['id'] ?>" onclick="return confirm('Etes vous certain de vouloir supprimer cette note ?')"> X </a>
    </li>
  <?php endforeach; ?>
  <ul>
      <li id="new-note2">
        <a id="new-note" href="/note-new">Crée une nouvelle note</a>
      </li>
    </ul>
</ul>
<?php require 'partials/footer.php'; ?>