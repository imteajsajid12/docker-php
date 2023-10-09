<?php
//namespace  Core;





//use Routers;

$router = new Routers();
$routes = require ('route.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$router->router($uri, 'GET');







//$router->get('/', 'Controller/index.php');

//function Abord($code)
//{
//    http_response_code(404);
//    echo "404";
//    die();
//}
//
//function RouteToControll($uri, $routes)
//{
//    if (array_key_exists($uri, $routes)) {
//        require $routes[$uri];
//    } else {
//        Abord(404);
//    }
//}






//$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//RouteToControll($uri, $routes);