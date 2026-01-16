<?php
class Router{
public static array $routes = [];

public static function get($path, $controller)
{
    self::$routes[$path] = $controller;
}

public static function dispatch()
{
    $page = $_GET['url']?? 'accueil';

    $parts = explode('/', $page);
    $controllerKey =  $parts[0];
    $method =  $parts[1] ?? 'index';

    if(!array_key_exists($controllerKey, self::$routes)){
    echo "<h1> ERROR 404</h1>";
    return;
    }
    $controllerName = self::$routes[$controllerKey];
    require_once '../app/Controllers/' . $controllerName . ".php";
    $controllerN = "Controllers\\".$controllerName;
    if(!method_exists($controllerN, $method)){
    echo "<h1> ERROR 404</h1>";
    return;
    }

    $controllerN::$method();
}
}



