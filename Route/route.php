<?php

return  [
    '/' => base_path('Controller/index.php'),
    '/about' => base_path('Controller/About.php'),
    '/notes'=> base_path('Controller/Notes/Notes.php'),
    '/note/create'=> base_path('Controller/Notes/Note_create.php'),
    '/note/view/{url}'=> base_path('Controller/Note.view.php'),
    '/note/view'=> base_path('Controller/Note.view.php'),

];