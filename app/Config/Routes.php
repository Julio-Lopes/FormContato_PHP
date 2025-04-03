<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contato', 'Contato::index');
$routes->post('/contato/submit', 'Contato::submit');