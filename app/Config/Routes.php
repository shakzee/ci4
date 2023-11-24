<?php

use App\Controllers\Pages;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Pages::about');

$routes->get('/about-us',[Pages::class,'index']);

$routes->get('/user/(:num)/(:num)',[Pages::class,'user']);

$routes->group('admin',static function($routes){
    $routes->get('index', 'Pages::index');
    $routes->get('about', 'Pages::about');
});