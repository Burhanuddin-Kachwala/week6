<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Note</title>
</head>
<body>
    
<h2>Notes</h2>

    <ul>       
        <?php if (!empty($results)): ?>         
            
        
            <li> 
                <?= htmlspecialchars($results["body"]); ?>            
            </li>
       
            
        <?php endif; ?>
    
</body>
</html>