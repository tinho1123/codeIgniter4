<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
/*
 * --------------------------------------------------------------------
 * Login
 * --------------------------------------------------------------------
 */

$routes->get('/', 'LoginController::index');
$routes->post('/login', 'LoginController::login');


/*
 * --------------------------------------------------------------------
 * Tela inicial
 * --------------------------------------------------------------------
 */

$routes->get('/dashboard', 'DashboardController::index');

/*
 * --------------------------------------------------------------------
 * Tela Profile
 * --------------------------------------------------------------------
 */
$routes->get('/profile', 'ProfileController::index');

/*
 * --------------------------------------------------------------------
 * Tela de usuarios
 * --------------------------------------------------------------------
 */

$routes->get('/usuarios', 'UsuariosController::index');
$routes->post('/usuarios/criar', 'UsuariosController::criar');
$routes->get('/usuarios/get-dados/(:num)', 'UsuariosController::get_dados/$1');
$routes->delete('/usuarios/delete/(:num)', 'UsuariosController::delete/$1');
$routes->post('/usuarios/editar', 'UsuariosController::editar');

/*
 * --------------------------------------------------------------------
 * tela de empresas
 * --------------------------------------------------------------------
 */

$routes->get('/empresas', 'EmpresasController::index');
$routes->get('/empresas/get-dados/(:num)', 'EmpresasController::get_dados/$1');
$routes->post('/empresas/editar', 'EmpresasController::editar');
$routes->delete('/empresas/delete/(:num)', 'EmpresasController::delete/$1');
$routes->post('/empresas/criar', 'EmpresasController::criarEmpresa');

/*
 * --------------------------------------------------------------------
 * tela de clientes
 * --------------------------------------------------------------------
 */
$routes->get('/clientes', 'ClientesController::index');
$routes->get('/clientes/get-dados/(:num)', 'ClientesController::get_dados/$1');
$routes->delete('/clientes/delete/(:num)', 'ClientesController::delete/$1');
$routes->post('/clientes/editar', 'ClientesController::editar');
$routes->post('/clientes/criar', 'ClientesController::criar');

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
