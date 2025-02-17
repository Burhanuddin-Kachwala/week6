<?php
use core\App;
use core\Database;
//require base_path('Database.php');

$db = App::resolve(Database::class);
  
$results =$db->query("select * from notes ORDER BY id DESC")->findOrAbort();

views(
    'notes/index.view.php', 
    [
        'heading' => 'Notes',
        'results' => $results
    ]
);
