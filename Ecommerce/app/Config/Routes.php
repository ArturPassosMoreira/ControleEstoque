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
$routes->setDefaultNamespace('App\Controllers\Client');
$routes->setDefaultController('HomeController');
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
$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function($routes) {
	$routes->get('/', 'HomeController::index', ['as' => 'home']);
	$routes->get('categorias', 'CategoriaController::index', ['as' => 'categorias']);
	$routes->get('produtos', 'ProdutoController::index', ['as' => 'produtos']);
	$routes->get('pedidos', 'PedidoController::index', ['as' => 'pedidos']);
	$routes->get('devolucoes', 'DevolucaoController::index', ['as' => 'devolucoes']);
	$routes->get('clientes', 'ClienteController::index', ['as' => 'clientes']);
	$routes->get('vendedores', 'VendedorController::index', ['as' => 'vendedores']);
});

$routes->group('auth', ['namespace' => 'App\Controllers\Auth'], function($routes) {
	$routes->get('register', 'RegistroController::index');
	$routes->post('register', 'RegistroController::store');
	$routes->get('login', 'LoginController::index', ['as' => 'login']);
	$routes->post('login/signIn', 'LoginController::signIn');
	$routes->get('logout', 'LoginController::signOut', ['as' => 'signOut']);
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
