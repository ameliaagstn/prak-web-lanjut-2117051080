<?php
use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// jika mengakses profile maka akan diarahkan ke fungsi profile yang ada pada controller home
$routes->get('/profile', 'Home::profile');

// ini sama aja tapi perlu import
$routes->get('/profile/(:any)/(:any)/(:any)', [Home::class, 'profile']);
