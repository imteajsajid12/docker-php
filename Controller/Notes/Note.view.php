<?php



use Core\Database;
$id= $_GET["id"];
if(empty($id))
{ echo "404";}
else {
    $heading = "home";
    $db = new Database();

    $notes = $db->query('SELECT * FROM  posts  where id= :id', [
        ':id' => $id
    ])->get();
    view('/Notes/Notes_view.php',
        ['Notes' => $notes
        ]);
}