<?php
namespace Fagoc\Core;
class Router
{
    private $method = 'GET';
    private $uri = '';
    /**
    * routes[
    *  'GET' => [
    *    '/' => 'faço isso',
    *    '/exercicio/6' => 'carregar o arquivo do exercicio 6'
    *    ]
    * ]
    */
    private $routes = [];
    public function __construct($uri = null, $method = null)
    {
        if (!is_null($uri)) {
            $this->uri = $uri;
        }
        if (!is_null($method)) {
            $this->method = $method;
        }
        $this->parseRequest();
    }
    private function parseRequest()
    {
        $self = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : '';
        $peaces = explode('/', $self);
        array_pop($peaces);
        $start = implode('/', $peaces);
        $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
        $search = '/' . preg_quote($start, '/') . '/';
        $uri = preg_replace($search, '', $request_uri, 1);
        $this->uri = $uri;
        $this->method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : $this->method;
    }
    public function __call($name, $arguments)
    {
        $method = strtoupper($name);
        if (!isset($this->routes[$method])) {
            $this->routes[$method] = [];
        }
        $route = $arguments[0];
        $callback = $arguments[1];
        $this->routes[$method][$route] = $callback;
    }
    public function run()
    {
        $routes = $this->routes[$this->method];
        foreach($routes as $route => $callback) {
            if ($route === $this->uri) {
                return call_user_func_array($callback, []);
            }
        }
    }
}
