<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
function Abord($code)
{
    http_response_code(404);
    echo "404";
    die();
}

$routes = [
    '/' => 'Controller/index.php',
    '/about' => 'Controller/About.php',
    '/notes'=> 'Controller/Notes.php',
];

function RouteToControll($uri, $routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        Abord(404);
    }
}
RouteToControll($uri,$routes);