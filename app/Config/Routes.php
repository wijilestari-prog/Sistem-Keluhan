<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->post('/login', 'Home::pressLogin');
$routes->get('/admin', 'Home::dashboard');
$routes->get('admin/data_keluhan', 'Home::dataKeluhan');
$routes->get('admin/tanggapan/(:num)', 'Home::tanggapanKeluhan/$1');
$routes->post('admin/tanggapan', 'Home::pressTanggapanKeluhan');
$routes->get('admin/detail_keluhan/(:num)', 'Home::detailKeluhan/$1');
$routes->post('admin/detail_keluhan/(:num)', 'Home::detailKeluhan/$1');
$routes->get('deleteKeluhan/(:num)', 'Home::deleteKeluhan/$1');
$routes->get('/logout', 'Home::logout');

$routes->get('user/keluhan', 'User::keluhan');
$routes->post('user/keluhan', 'User::pressKeluhan');

$routes->get('/export', 'ExportController::export');





