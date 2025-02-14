<?php
use core\Database;
//require base_path('Database.php');
$db = new Database();
$results =$db->query("select * from notes ORDER BY id DESC")->findOrAbort();

views(
    'notes/index.view.php', 
    [
        'heading' => 'Notes',
        'results' => $results
    ]
);
