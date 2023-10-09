<?php
//namespace  Core;
use Core\Database;
//use function Core\RouteToControll;

const  BASE_PATH = __DIR__ . '/../'; // path to the base directory

require(BASE_PATH . '/Core/Function.php'); // path to the function
// database connect/
require base_path('/Core/Database.php'); // path to the database


require base_path('/Core/Routers.php'); // path to the database

require base_path("Route/web.php"); // path to the route




//$routes = require ('route.php');
//var_dump($routes);
//
//$router = new Routers();
//
//$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//$router->router($uri, 'GET');


//$routes = require ("Route/routes.php");
//var_dump($routes);

//echo "gad";










