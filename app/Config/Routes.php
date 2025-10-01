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

// ====================
// Admin - Anggota
// ====================
$routes->group('admin', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('anggota', 'Anggota::index');
    $routes->get('anggota/create', 'Anggota::create');
    $routes->post('anggota/store', 'Anggota::store');
    $routes->get('anggota/edit/(:num)', 'Anggota::edit/$1');
    $routes->post('anggota/update/(:num)', 'Anggota::update/$1');
    $routes->get('anggota/delete/(:num)', 'Anggota::delete/$1');
});
