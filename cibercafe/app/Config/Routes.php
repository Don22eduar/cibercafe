<?php

use CodeIgniter\Commands\Utilities\Routes;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/control', 'control::index');
$routes->get('/plantilla', 'control::plantilla');
$routes->get('/catalogo', 'control::catalogo');
$routes->get('/limpieza', 'control::limpieza');
$routes->get('/electro', 'control::electro');
$routes->get('/hogar', 'control::hogar');
$routes->get('/acercade', 'control::acercade');
$routes->get('/producto', 'control::producto');


