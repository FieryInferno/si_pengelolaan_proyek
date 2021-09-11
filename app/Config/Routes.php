<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Logincontroller::index');
$routes->get('/login', 'Logincontroller::index');
$routes->post('/login', 'Logincontroller::login');
$routes->get('/logout', 'Logincontroller::logout');

$routes->group('admin', function ($routes) {
  $routes->get('/', 'Admincontroller::index');

  $routes->group('proyek', function ($routes) {
    $routes->get('/', 'Proyekcontroller::index');
    $routes->get('tambah', 'Proyekcontroller::create');
    $routes->post('tambah', 'Proyekcontroller::store');
    $routes->get('edit/(:any)', 'Proyekcontroller::edit/$1');
    $routes->put('edit/(:any)', 'Proyekcontroller::update/$1');
    $routes->delete('hapus/(:any)', 'Proyekcontroller::destroy/$1');
  });

  $routes->group('pegawai', function ($routes) {
    $routes->get('/', 'Pegawaicontroller::index');
    $routes->get('tambah', 'Pegawaicontroller::create');
    $routes->post('tambah', 'Pegawaicontroller::store');
    $routes->get('edit/(:any)', 'Pegawaicontroller::edit/$1');
    $routes->put('edit/(:any)', 'Pegawaicontroller::update/$1');
    $routes->delete('hapus/(:any)', 'Pegawaicontroller::destroy/$1');
  });

  $routes->group('register', function ($routes) {
    $routes->get('/', 'Registercontroller::index');
    $routes->get('tambah', 'Registercontroller::create');
    $routes->post('tambah', 'Registercontroller::store');
    $routes->get('edit/(:any)', 'Registercontroller::edit/$1');
    $routes->put('edit/(:any)', 'Registercontroller::update/$1');
    $routes->delete('hapus/(:any)', 'Registercontroller::destroy/$1');
  });
});

$routes->group('pj', function ($routes) {
  $routes->get('/', 'PenanggungJawabcontroller::index');

  $routes->group('proyek', function ($routes) {
    $routes->get('/', 'Proyekcontroller::index');
    $routes->get('tambah', 'Proyekcontroller::create');
    $routes->post('tambah', 'Proyekcontroller::store');
    $routes->get('edit/(:any)', 'Proyekcontroller::edit/$1');
    $routes->put('edit/(:any)', 'Proyekcontroller::update/$1');
    $routes->delete('hapus/(:any)', 'Proyekcontroller::destroy/$1');
  });

  $routes->group('register', function ($routes) {
    $routes->get('/', 'Registercontroller::index');
    $routes->get('tambah', 'Registercontroller::create');
    $routes->post('tambah', 'Registercontroller::store');
    $routes->get('edit/(:any)', 'Registercontroller::edit/$1');
    $routes->put('edit/(:any)', 'Registercontroller::update/$1');
    $routes->delete('hapus/(:any)', 'Registercontroller::destroy/$1');
  });
});

$routes->group('member', function ($routes) {
  $routes->get('/', 'Membercontroller::index');

  $routes->group('proyek', function ($routes) {
    $routes->get('/', 'Proyekcontroller::index');
    $routes->get('tambah', 'Proyekcontroller::create');
    $routes->post('tambah', 'Proyekcontroller::store');
    $routes->get('edit/(:any)', 'Proyekcontroller::edit/$1');
    $routes->put('edit/(:any)', 'Proyekcontroller::update/$1');
    $routes->delete('hapus/(:any)', 'Proyekcontroller::destroy/$1');
  });

  $routes->group('register', function ($routes) {
    $routes->get('/', 'Registercontroller::index');
    $routes->get('tambah', 'Registercontroller::create');
    $routes->post('tambah', 'Registercontroller::store');
    $routes->get('edit/(:any)', 'Registercontroller::edit/$1');
    $routes->put('edit/(:any)', 'Registercontroller::update/$1');
    $routes->delete('hapus/(:any)', 'Registercontroller::destroy/$1');
  });
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
