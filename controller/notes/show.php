<?php
require('Database.php');
$db = new Database();
$results =$db->query('select * from notes where id = :id',['id' => $_GET['id'] ])->findOrAbort(PDO::FETCH_ASSOC);


//dd($results);
$currentUserId = 4;
authorize($results['user_id']==$currentUserId);


require(__DIR__.'/../../view/notes/show.view.php');
?>