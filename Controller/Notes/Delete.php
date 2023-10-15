<?php

use Core\Database;

$heading = "home";
if ($_SERVER['REQUEST_METHOD'] === "POST") {
$id = $_POST['id'];

    $db = new Database();
    $notes = $db->query("DELETE  FROM  posts  where id = $id");

    header('Location: /notes');

    exit;
}
