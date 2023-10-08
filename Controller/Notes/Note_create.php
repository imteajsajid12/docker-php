<?php
require base_path('/Core/validation.php');
$heading = "notes Created";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
//validation//
    $Errors = [];
    if (!validation::string($_POST['title'], 1, 255)) {
        $Errors['title'] = "Invalid title requared";

    }
    if (!validation::string($_POST['comment'], 1, 255)) {
        $Errors['comment'] = "Invalid comment requared";
    }

//insert data
    if (empty($Errors)) {
        $db = new Database();
        $notes = $db->query('INSERT INTO posts (title,comment,user_id) VALUES (:title, :comment, :user_id)',
            [
                'title' => $_POST['title'],
                'comment' => $_POST['comment'],
                'user_id' => 8
            ]
        );
    }

}

require view('/Notes/note.create.view.php');