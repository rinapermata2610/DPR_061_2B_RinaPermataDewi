<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default route
$routes->get('/', 'Home::index');

// Auth
$routes->match(['get', 'post'], 'login', 'Auth::login');
$routes->get('logout', 'Auth::logout');

// ====================
// Admin
// ====================
$routes->group('admin', [
    'namespace' => 'App\Controllers\Admin',
    'filter'    => 'role:admin'
], function ($routes) {
    // Dashboard
    $routes->get('/', 'DashboardController::index');
    $routes->get('dashboard', 'DashboardController::index');

    // Anggota
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

    // Penggajian
    $routes->get('penggajian', 'PenggajianController::index');
    $routes->get('penggajian/create', 'PenggajianController::create');
    $routes->post('penggajian/store', 'PenggajianController::store');
    $routes->get('penggajian/detail/(:num)', 'PenggajianController::detail/$1');
    $routes->get('penggajian/edit/(:num)', 'PenggajianController::edit/$1');
    $routes->post('penggajian/update/(:num)', 'PenggajianController::update/$1');
    $routes->get('penggajian/delete-komponen/(:num)/(:num)', 'PenggajianController::deleteKomponen/$1/$2');
    $routes->get('penggajian/delete/(:num)', 'PenggajianController::delete/$1');
});

// ====================
// Client
// ====================
$routes->group('client', [
    'namespace' => 'App\Controllers\Client',
    'filter'    => 'role:client'
], function ($routes) {
    // Dashboard
    $routes->get('/', 'ClientDashboardController::index');
    $routes->get('dashboard', 'ClientDashboardController::index');

    // Menu Client
    $routes->get('anggota', 'AnggotaController::index');
    $routes->get('penggajian', 'ClientPenggajianController::index');
});
