<?php 
namespace src\core;

// use src\routes;

class bootstrap 
{
  public function __construct(routes $routes)
  {
    $this->routes = $routes;
  }
  
  public function start()
  {
    echo 'mama';
  }
}