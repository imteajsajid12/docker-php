<?php

use Core\Database;
use Core\validation;

require base_path('/Core/validation.php'); // path to the validation

$heading = "notes Created";
$id = $_POST['id'];

$Errors = [];


if ($_SERVER['REQUEST_METHOD'] === "POST") {
//validation//
    if (!validation::string($_POST['title'], 1, 255)) {
        $Errors['title'] = "Invalid title requared";

    }
    if (!validation::string($_POST['comment'], 1, 255)) {
        $Errors['comment'] = "Invalid comment requared";
    }
//insert data

    if (empty($Errors)) {
        $db = new Database();
        $title = $_POST['title'];
        $comment = $_POST['comment'];


        $notes = $db->query("UPDATE posts SET title='{$title}',comment='{$comment}' WHERE id=$id");

    }
}

header('location: /notes');