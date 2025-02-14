<?php
//require base_path('Database.php');
$db = new Database();
$results =$db->query("select * from notes")->findOrAbort();

views(
    'notes/index.view.php', 
    [
        'heading' => 'Notes',
        'results' => $results
    ]
);
