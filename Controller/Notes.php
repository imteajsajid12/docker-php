<?php

//notes Controllers



//query files


$id = $_GET["id"];
$int = (int)$id;
echo  $id;

$db = new Database();
$notes = $db->query("SELECT * FROM  users where id = $id");

var_dump($notes['id']);





//include view files
//include('view/notes_view.php');