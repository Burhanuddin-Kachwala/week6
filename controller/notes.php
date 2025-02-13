<?php
require('Database.php');
$db = new Database();
$results =$db->query("select * from notes")->findOrAbort();

require(__DIR__.'/view/notes.view.php');
