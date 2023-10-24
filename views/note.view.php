<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
</head>
<body>
    <h2><?=$note['title']?></h2>
    <p><?=$note['content']?></p>
    <p><?=$note['created_at']?></p>
    <p><a href="/notes">Retour à la liste des notes</a></p>
</body>
</html>