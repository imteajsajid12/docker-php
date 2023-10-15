<?php
//namespace  Core;

//use Routers;
$router = new Routers();
$routes = require ('route.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['method'] ?? $_SERVER['REQUEST_METHOD'];
$router->router($method,$uri);
