<?php
// use App\Controllers\HomeController;
// use App\Controllers\AboutController;
// use App\Controllers\ContactController;
// use App\Controllers\UserController;
// use App\Controllers\BrandController;
// use App\Controllers\BlogController;
// use App\Router;

// $router = new Router();

// $router->get('/', HomeController::class, 'index');
// $router->get('/about-us', AboutController::class, 'index');
// $router->get('/contact-us', ContactController::class, 'index');
// $router->get('/users', UserController::class, 'index');
// $router->get('/brands', BrandController::class, 'index');
// $router->get('/blog', BlogController::class, 'index');

// $router->dispatch();

// use App\Controllers\Router;
// use App\Controllers\SiteController;
require_once 'src/Controllers/Router.php';
require_once 'src/Controllers/SiteController.php';
$router = new Router();
$router->add('GET', '/', [SiteController::class, 'home']); 
$router->add('GET', '/about-us', [SiteController::class, 'aboutUs']); 
$router->add('GET', '/contact-us', [SiteController::class, 'contactUs']);
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->dispatch($path); 
