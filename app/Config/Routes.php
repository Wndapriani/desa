<?php

namespace Config;

use App\Controllers\LahirController;
use App\Controllers\MeninggalController;

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
$routes->setAutoRoute(true);
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

$routes->group('', ['filter' => 'auth'], function ($routes) {
    // $routes->get('/', 'Home::index');
    $routes->get('/dashboard', 'Dashboard::index');

    $routes->get('penduduk', 'PendudukController::index');
    $routes->get('penduduk/create', 'PendudukController::create');
    $routes->post('penduduk', 'PendudukController::store');
    $routes->get('penduduk/view/(:num)', 'PendudukController::view/$1');
    $routes->get('penduduk/edit/(:num)', 'PendudukController::edit/$1');
    $routes->post('penduduk/update/(:num)', 'PendudukController::update/$1');
    $routes->get('penduduk/delete/(:num)', 'PendudukController::delete/$1');

    $routes->get('kartu-keluarga', 'KartuKeluargaController::index');
    $routes->get('kartu-keluarga/create', 'KartuKeluargaController::create');
    $routes->get('kartu-keluarga/anggota/(:num)', 'KartuKeluargaController::createAnggota/$1');
    $routes->post('kartu-keluarga/anggota/(:num)', 'KartuKeluargaController::storeAnggota/$1');
    $routes->get('kartu-keluarga/anggota/delete/(:num)', 'KartuKeluargaController::deleteAnggota/$1');

    $routes->post('kartu-keluarga', 'KartuKeluargaController::store');
    $routes->get('kartu-keluarga/edit/(:num)', 'KartuKeluargaController::edit/$1');
    $routes->post('kartu-keluarga/update/(:num)', 'KartuKeluargaController::update/$1');
    $routes->get('kartu-keluarga/delete/(:num)', 'KartuKeluargaController::delete/$1');

    $routes->group('lahir', function ($routes) {
        $routes->get('/', 'LahirController::index');
        $routes->get('create', 'LahirController::create');
        $routes->post('store', 'LahirController::store');
        $routes->get('edit/(:num)', 'LahirController::edit/$1');
        $routes->post('update/(:num)', 'LahirController::update/$1');
        $routes->get('delete/(:num)', 'LahirController::delete/$1');
    });


    $routes->group('meninggal', function ($routes) {
        $routes->get('/', 'MeninggalController::index');
        $routes->get('create', 'MeninggalController::create');
        $routes->post('store', 'MeninggalController::store');
        $routes->get('edit/(:num)', 'MeninggalController::edit/$1');
        $routes->post('update/(:num)', 'MeninggalController::update/$1');
        $routes->get('delete/(:num)', 'MeninggalController::delete/$1');
    });

    $routes->group('pendatang', function ($routes) {
        $routes->get('/', 'PendatangController::index');
        $routes->get('create', 'PendatangController::create');
        $routes->post('store', 'PendatangController::store');
        $routes->get('edit/(:num)', 'PendatangController::edit/$1');
        $routes->post('update/(:num)', 'PendatangController::update/$1');
        $routes->get('delete/(:num)', 'PendatangController::delete/$1');
    });

    $routes->group('pindah', function ($routes) {
        $routes->get('/', 'PindahController::index');
        $routes->get('create', 'PindahController::create');
        $routes->post('store', 'PindahController::store');
        $routes->get('edit/(:num)', 'PindahController::edit/$1');
        $routes->post('update/(:num)', 'PindahController::update/$1');
        $routes->get('delete/(:num)', 'PindahController::delete/$1');
    });


    $routes->get('surat/(:alpha)', 'SuratController::surat/$1');
    $routes->get('surat-cetak/(:alpha)', 'SuratController::cetak/$1');
});

$routes->get('register', 'LoginController::register');
$routes->post('register', 'LoginController::register');
$routes->get('login', 'LoginController::login');
$routes->post('login', 'LoginController::login');
$routes->get('logout', 'LoginController::logout');


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
