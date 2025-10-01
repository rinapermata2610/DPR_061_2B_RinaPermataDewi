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
// Admin
// ====================
$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function($routes) {
    // Kelola Anggota
    $routes->get('anggota', 'AnggotaController::index');
    $routes->get('anggota/create', 'AnggotaController::create');
    $routes->post('anggota/store', 'AnggotaController::store');
    $routes->get('anggota/edit/(:num)', 'AnggotaController::edit/$1');
    $routes->post('anggota/update/(:num)', 'AnggotaController::update/$1');
    $routes->get('anggota/delete/(:num)', 'AnggotaController::delete/$1');
    
    // Komponen Gaji
    $routes->get('komponen', 'KomponenGajiController::index');
    $routes->get('komponen/create', 'KomponenGajiController::create');
    $routes->post('komponen/store', 'KomponenGajiController::store');
    $routes->get('komponen/edit/(:num)', 'KomponenGajiController::edit/$1');
    $routes->post('komponen/update/(:num)', 'KomponenGajiController::update/$1');
    $routes->get('komponen/delete/(:num)', 'KomponenGajiController::delete/$1');
});
