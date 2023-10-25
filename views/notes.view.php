<?php require 'partials/header.php'; ?>
<title>Notes</title>
<h1>Notes</h1>
<ul>
  <?php foreach ($notes as $note) : ?>
    <li>
      <a href="/note?id=<?= $note['id'] ?>">
        <?= $note['title'] ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
<?php require 'partials/footer.php'; ?>