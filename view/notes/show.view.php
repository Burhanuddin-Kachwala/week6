<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Note</title>
    
</head>
<body class="bg-gray-900 text-gray-100 p-6">
    
<h2 class="text-2xl font-bold mb-4 text-center"><?=$heading?></h2>

<div class="max-w-md mx-auto bg-gray-800 p-6 rounded-lg shadow-lg">
    <ul class="list-none">       
        <li class="bg-gray-700 p-4 rounded shadow-md ">
            <?= htmlspecialchars($results["body"]); ?>            
        </li>
    </ul>
</div>
    
</body>
</html>
