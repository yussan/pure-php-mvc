<?php 
namespace src;

use src\controllers\home as Home;

$routes = [
  '/directory/home/id' => $Home.getId,
  '/directory/home/en' => $Home.getEn
];

class Routes 
{
  public function index()
  {
    return $routes;
  }
}