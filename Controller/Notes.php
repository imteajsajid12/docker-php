<?php

//notes Controllers


$id = $_GET['id'];

$db = new Database( );
$notes = $db->query("SELECT * FROM  posts")->all();
var_dump($notes);







