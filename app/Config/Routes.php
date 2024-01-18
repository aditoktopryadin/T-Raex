<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Main');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// Main Routes
$routes->get('/', 'Main::index');
$routes->post('/user/cari', 'Main::cari');
// admin routes
$routes->get('/admin', 'Admin::index');
// Auth
$routes->get('/login', 'Auth::index');
$routes->post('/Auth/login_process', 'Auth::process');
$routes->get('/logout', 'Auth::logout');

// Routes User
$routes->get('/admin/user', 'Admin::user');
$routes->post('/admin/add_user', 'Admin::save_user');
$routes->post('/admin/edit_user/(:any)', 'Admin::edit_user/$1');
$routes->get('/admin/delete_user/(:num)', 'Admin::delete_user/$1');
// Routes Rute
$routes->get('/admin/rute', 'Admin::rute');
$routes->post('/admin/add_rute', 'Admin::save_rute');
$routes->post('/admin/edit_rute/(:any)', 'Admin::edit_rute/$1');
$routes->get('/admin/delete_rute/(:num)', 'Admin::delete_rute/$1');

// Routes Stasiun
$routes->get('/admin/stasiun', 'Admin::stasiun');
$routes->post('/admin/add_stasiun', 'Admin::save_stasiun');
$routes->post('/admin/edit_stasiun/(:any)', 'Admin::edit_stasiun/$1');
$routes->get('/admin/delete_stasiun/(:num)', 'Admin::delete_stasiun/$1');

// Routes Jadwal
$routes->get('/admin/jadwal', 'Admin::jadwal');

// Routes Urutan
$routes->get('/admin/urutan', 'Admin::urutan');
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
