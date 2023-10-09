<?php

class Router
{
    public $routes = [];

    public function get($uri, $controller)
    { // get all routes
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'GET',
        ];
    }

    public function post($uri, $controller)
    { // get all routes
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'POST',
        ];
    }

    public function Delete($uri, $controller)
    { // get all routes
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'DELETE',
        ];
    }

    public function put($uri, $controller)
    { // get all routes
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PUT',
        ];
    }

    public function patch($uri, $controller)
    { // get all routes
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'Patch',
        ];
    }

    public function routers($uri, $method)
    {
        foreach ($this->routes as $route) {
            var_dump($route);
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require base_path($route['controller']);
            }
        }
        $this->Abord();
    }

    protected function Abord($code)
    {
        http_response_code(404);
        echo "404";
        die();
    }
}