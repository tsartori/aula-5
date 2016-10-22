<?php
namespace Fagoc/core;

class Router{
    private $method = 'get';
    private $uri='';

    public function __construct($uri = null, $method = null){

      if (!is_null($uri)) {
        $this->uri = $uri;
      }

      if (!is_null($method)) {
        $this->method = $method;
      }
    }
  }

 ?>
