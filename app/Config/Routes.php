<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->match(['get','post'],'login','Auth::login');
$routes->get('logout','Auth::logout');
$routes->get('dashboard','Dashboard::index');
$routes->get('gaji','Gaji::index');

