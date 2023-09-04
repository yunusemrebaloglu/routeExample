<?php
class PageController
{
  public function routeRequest()
  {
    $uri = $_SERVER['REQUEST_URI'];
    $routes = include 'route.php';
    if (array_key_exists($uri, $routes)) {
      $action = $routes[$uri];
      
      $this->$action();
    } else {
      $this->notFound();
    }
  }

  public function homepage()
  {

    require_once 'views/homepage.php';
  }

  public function folder1()
  {
    require_once 'views/folder1.php';
  }

  public function folder2()
  {
    require_once 'views/folder2.php';
  }

  public function notFound()
  {
    header("HTTP/1.0 404 Not Found");
    echo '404 - Not Found';
  }
}
