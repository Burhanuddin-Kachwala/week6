<?php
//require base_path('../Database.php');
$db = new Database();
$results =$db->query('select * from notes where id = :id',['id' => $_GET['id'] ])->findOrAbort(PDO::FETCH_ASSOC);


//dd($results);
$currentUserId = 4;
authorize($results['user_id']==$currentUserId);


views(
    'notes/show.view.php', 
    [
        'heading' => 'Single Note',
        'results' => $results
        
    ]
);
?>