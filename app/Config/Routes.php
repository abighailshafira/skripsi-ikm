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
$routes->setDefaultController('Home');
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

/* User Routes */
$routes->get('/', 'UserController::index');
$routes->get('/kontak', 'UserController::kontak');
$routes->get('/faq', 'UserController::faq');
$routes->get('/error', 'UserController::error');

// Survei
$routes->get('/survei', 'UserController::survei');
$routes->post('/survei/insert', 'UserController::insertRespon');

$routes->get('/identitas-responden', 'UserController::responden');
$routes->post('/identitas-responden/create', 'UserController::insertResponden');
$routes->get('/kuesioner-survei', 'UserController::pertanyaan');

// Rekapitulasi
$routes->get('/rekapitulasi', 'UserController::rekapitulasi');

/* Admin Routes */
$routes->get('/dashboard', 'AdminController::index', ['filter' => 'role:admin,superadmin']);

// Lembaga
$routes->get('/lembaga', 'AdminController::lembaga', ['filter' => 'role:admin,superadmin']);
$routes->post('/lembaga/create', 'AdminController::insertLembaga', ['filter' => 'role:admin,superadmin']);
$routes->post('/lembaga/update/(:num)', 'AdminController::updateLembaga/$1', ['filter' => 'role:admin,superadmin']);

// Layanan
$routes->get('/layanan', 'AdminController::getLayanan', ['filter' => 'role:admin,superadmin']);
// $routes->get('/layanan/(:segment)', 'AdminController::getLayanan', ['filter' => 'role:admin,superadmin']);
$routes->post('/layanan/create', 'AdminController::insertLayanan', ['filter' => 'role:admin,superadmin']);
$routes->get('/layanan/delete/(:num)', 'AdminController::deleteLayanan/$1', ['filter' => 'role:admin,superadmin']);
// $routes->delete('/layanan/(:num)', 'AdminController::deleteLayanan/$1', ['filter' => 'role:admin,superadmin']);
$routes->post('/layanan/update/(:num)', 'AdminController::updateLayanan/$1', ['filter' => 'role:admin,superadmin']);

// Kuesioner
$routes->get('/kuesioner', 'AdminController::kuesioner', ['filter' => 'role:admin,superadmin']);

// Unsur
$routes->get('/unsur', 'AdminController::unsur', ['filter' => 'role:admin,superadmin']);
$routes->post('/unsur/create', 'AdminController::insertUnsur', ['filter' => 'role:admin,superadmin']);
$routes->get('/unsur/delete/(:segment)', 'AdminController::deleteUnsur/$1', ['filter' => 'role:admin,superadmin']);
$routes->post('/unsur/update/(:segment)', 'AdminController::updateUnsur/$1', ['filter' => 'role:admin,superadmin']);

// Indikator 
$routes->get('/indikator', 'AdminController::indikator', ['filter' => 'role:admin,superadmin']);
$routes->post('/indikator/create', 'AdminController::insertIndikator', ['filter' => 'role:admin,superadmin']);
$routes->get('/indikator/delete/(:segment)', 'AdminController::deleteIndikator/$1', ['filter' => 'role:admin,superadmin']);
$routes->post('/indikator/update/(:segment)', 'AdminController::updateIndikator/$1', ['filter' => 'role:admin,superadmin']);

// Pertanyaan
$routes->get('/pertanyaan', 'AdminController::getPertanyaan', ['filter' => 'role:admin,superadmin']);
$routes->post('/pertanyaan/create', 'AdminController::insertPertanyaan', ['filter' => 'role:admin,superadmin']);
$routes->get('/pertanyaan/delete/(:num)', 'AdminController::deletePertanyaan/$1', ['filter' => 'role:admin,superadmin']);
$routes->post('/pertanyaan/update/(:num)', 'AdminController::updatePertanyaan/$1', ['filter' => 'role:admin,superadmin']);

// Pilihan Jawaban
$routes->get('/pilihan-jawaban', 'AdminController::pilihanJawaban', ['filter' => 'role:admin,superadmin']);
$routes->post('/pilihan-jawaban/update/(:num)', 'AdminController::updatePilihanJawaban/$1', ['filter' => 'role:admin,superadmin']);

// Profil User
$routes->get('/profil', 'AdminController::profil', ['filter' => 'role:admin,superadmin']);
$routes->post('/profil/update/(:num)', 'AdminController::updateProfil/$1', ['filter' => 'role:admin,superadmin']);

// Admin
$routes->get('/admin', 'AdminController::admin', ['filter' => 'role:superadmin']);
$routes->post('/admin/update/(:num)', 'AdminController::updateAdmin/$1', ['filter' => 'role:superadmin']);
$routes->get('/admin/delete/(:num)', 'AdminController::deleteAdmin/$1', ['filter' => 'role:superadmin']);

$routes->get('/respon', 'AdminController::respon', ['filter' => 'role:admin,superadmin']);
$routes->get('/hasil', 'AdminController::rekapitulasi', ['filter' => 'role:admin,superadmin']);


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
