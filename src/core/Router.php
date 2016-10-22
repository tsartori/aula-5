<?php
namespace Fagoc/core;

class Router{
    private $method = 'get';
    private $uri='';

    /**
    *  routes[
    *     'GET' => [
    *      '/' => 'Faço isso',
    *      '/exercicio-6/' =>
    *
    */
    private $routes = [];

    public function __construct($uri = null, $method = null){

      if (!is_null($uri)) {
        $this->uri = $uri;
      }

      if (!is_null($method)) {
        $this->method = $method;
      }

    }

    public function __call($name, $arguments){

      $method = strtoupper($name);
      if (!isset($this->routes[$method])) {
        this->routes[$method] = [];
      }

      $route = arguments[0];
      $callback = arguments[1];

      this->routes[$method][$route] = $callback;

      //var_dump($arguments);

    }


  }

 ?>
