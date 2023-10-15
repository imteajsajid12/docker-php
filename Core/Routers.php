<?php

class Routers
{
    public $routes = [];


    public  function add($uri, $method, $controller){

        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
        ];
    }
    public function get($uri, $controller)
    { // get all routes
       $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    { // get all routes
        $this->add('POST', $uri, $controller);
    }

    public function Delete($uri, $controller)
    { // get all routes
        $this->add('DELETE', $uri, $controller);
    }

    public function put($uri, $controller)
    { // get all routes
        $this->add('PUT', $uri, $controller);
    }

    public function patch($uri, $controller)
    { // get all routes
        $this->add('PATCH', $uri, $controller);
    }

    public function router($uri, $method)
    {
        foreach ($this->routes as $route) {
            /** @var resource $route */
            if ($route['method'] === $method  && $route['uri'] === strtoupper($uri)) {
                return require base_path($route['controller']);
            }
        }
        $this->Abord();
    }

    protected function Abord($code = 404)
    {
        http_response_code(404);
        echo "404";
        die();
    }
}