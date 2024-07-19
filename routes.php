<?php
require_once 'controllers/Router.php';
require_once 'controllers/SiteController.php';
$router = new Router();
$router->add('GET', '/', [SiteController::class, 'home']); 
$router->add('GET', '/about', [SiteController::class, 'about']); 
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->dispatch($path); 
