<?php
// declare(strict_types=1);
namespace App;

class Router
{
    // private array $routes = [];
    protected $routes = [];
    // private function addRoute($route, $controller, $action, $method)
    // {
    //     $this->routes[$method][$route] = ['controller' => $controller, 'action' => $action];
    // }

    // public function get($route, $controller, $action)
    // {
    //     $this->addRoute($route, $controller, $action, "GET");
    // }

    // public function post($route, $controller, $action)
    // {
    //     $this->addRoute($route, $controller, $action, "POST");
    // }

    // public function dispatch()
    // {
    //     $uri = strtok($_SERVER['REQUEST_URI'], '?');
    //     $method =  $_SERVER['REQUEST_METHOD'];

    //     if (array_key_exists($uri, $this->routes[$method])) {
    //         $controller = $this->routes[$method][$uri]['controller'];
    //         $action = $this->routes[$method][$uri]['action'];

    //         $controller = new $controller();
    //         $controller->$action();
    //     } else {
    //         throw new \Exception("No route found for URI: $uri");
    //     }
    // }

  public function add(string $method, string $path, array $controller) { 
    $path = $this->normalizePath($path);
    $this->routes[] = [
      'path' => $path,
      'method' => strtoupper($method),
      'controller' => $controller,
      'middlewares' => []
    ];

  }
  private function normalizePath(string $path): string { 
    $path = trim($path, '/'); 
    $path = "/{$path}/"; 
    $path = preg_replace('#[/]{2,}#', '/', $path);
    return $path;

  }
  public function dispatch(string $path) { 
    $path = $this->normalizePath($path); 
    $method = strtoupper($_SERVER['REQUEST_METHOD']);
    foreach ($this->routes as $route) {
      if (!preg_match("#^{$route['path']}$#", $path) || $route['method'] !== $method) {
        continue;
      }
      [$class, $function] = $route['controller'];
      $controllerInstance = new $class;
      $controllerInstance->{$function}();
    }
  } 

}
