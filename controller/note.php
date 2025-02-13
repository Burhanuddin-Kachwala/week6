<?php
require('Database.php');
$db = new Database();
$results =$db->query('select * from notes where id = :id',['id' => $_GET['id'] ])->findOrAbort(PDO::FETCH_ASSOC);


//dd($results);
$currentUserId = 4;
if($results['user_id']!=$currentUserId){
    abort(Response::HTTP_FORBIDDEN);
}

require(__DIR__.'/view/note.view.php');
?>