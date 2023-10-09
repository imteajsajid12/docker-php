<?php



//$id = $_GET['id'];
//use Core\Database;

$heading = "home";

$db = new Database( );
//$notes = $db->query("SELECT * FROM  posts")->get();


require('view/Notes/Notes.view.php');