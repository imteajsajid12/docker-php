<?php

//notes Controllers

$db = new Database();
$notes = $db->query("SELECT * FROM  posts")->all();

//$heading = 'notes';

//return view with
 view('/Notes/index.php',[
     'heading' => 'Notes',
     'notes' =>$notes
 ]);







