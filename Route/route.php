<?php

//namespace Core;
//return  [
//    '/' => base_path('Controller/index.php'),
//    '/about' => base_path('Controller/About.php'),
//    '/notes'=> base_path('Controller/Notes/Notes.php'),
//    '/note/create'=> base_path('Controller/Notes/Note_create.php'),
//    '/note/view/{url}'=> base_path('Controller/Note.view.php'),
//    '/note/view'=> base_path('Controller/Note.view.php'),
//];



$router->get('/', 'Controller/index.php');
$router->get('/notes', 'Controller/Notes/Notes.php');
$router->get('/notes/create', 'Controller/Notes/Note_create.php');
$router->post('/notes/create', 'Controller/Notes/Note_create.php');

$router->get('/notes/show', 'Controller/Notes/Note.view.php');
$router->post('/notes/delete', 'Controller/Notes/Delete.php');
$router->post('/notes/update', 'Controller/Notes/Update.php');
