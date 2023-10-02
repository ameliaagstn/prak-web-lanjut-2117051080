<?php
use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// jika mengakses profile maka akan diarahkan ke fungsi profile yang ada pada controller home
$routes->get('/profile', 'Home::profile');

// ini sama aja tapi perlu import
$routes->get('/profile/(:any)/(:any)/(:any)', [Home::class, 'profile']);

$routes->get('/user/profile', [UserController::class, 'profile']);
$routes->get('/user/create', [UserController::class, 'create']);
$routes->post('/user/store', [UserController::class, 'store']);

$routes->get('/user/index', [UserController::class, 'index']);

//$routes->match(['get', 'post'],'/user/store', [UserController::class, 'store']);
