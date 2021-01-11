<?php

require __DIR__ . '/../vendor/autoload.php';

use MVCSkeleton\Control\Controller\InterfaceRequestController;
// var_dump($_SERVER);

$path = (isset($_SERVER['PATH_INFO'])) ? $_SERVER['PATH_INFO'] : '/' ;
// $path = $_SERVER['PATH_INFO'];
$routes = require __DIR__ . '/../cfg/routes.php';

if (!array_key_exists($path, $routes)) {
    http_response_code(404);
    exit();
}

$controllerClass = $routes[$path];
/** @var InterfaceRequestController $controller */
$controller = new $controllerClass();
// var_dump($controller);
$controller->processRequest();
