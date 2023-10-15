<?php
namespace Core;
//notes Controllers
use Routers;

$db = new Database();
//$notes = $db->query("SELECT * FROM  posts")->all();
//$notes = $db->query("SELECT * FROM `posts` INNER JOIN users ON posrs.user_id  = users.id;")->all();
$notes = $db->query("SELECT * FROM `users` INNER JOIN posts ON users.id = posts.user_id;")->all();
//var_dump($notes);
//return view with
 view('/Notes/index.php',[
     'heading' => 'Notes',
     'notes' =>$notes
 ]);







