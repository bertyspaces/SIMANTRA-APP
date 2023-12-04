<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->group('', ['filter' => 'login'], function ($routes) {
    $routes->group('', ['filter' => 'role:admin'], function ($routes) {
        $routes->get('/admin', 'Admin::index');
        $routes->get('/admin/manajemenUser', 'Admin::manajemenUser');
    });
    $routes->group('', ['filter' => 'role:ipds,pml'], function ($routes) {
        $routes->get('/', 'User::index',);
    });
});
$routes->get('/kegiatan/edit/(:num)', 'Kegiatan::edit/$1');
$routes->post('/kegiatan/update', 'Kegiatan::update');
$routes->get('kegiatan/cetak', 'Kegiatan::cetak');
