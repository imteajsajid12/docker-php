<?php
namespace Core;
//notes Controllers
use Routers;

$db = new Database();
$notes = $db->query("SELECT * FROM  posts")->all();

//return view with
 view('/Notes/index.php',[
     'heading' => 'Notes',
     'notes' =>$notes
 ]);







