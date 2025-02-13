<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
</head>
<body>
    
<h2>Notes</h2>
    
    <ul>
       
        <?php foreach ($results as $row): ?>
            <li>
            <a href="note?id=<?= $row['id'];?>">
                <?= htmlspecialchars($row['body']); ?>
            </a>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>