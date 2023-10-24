<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notes</title>
</head>

<body>
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
</body>

</html>