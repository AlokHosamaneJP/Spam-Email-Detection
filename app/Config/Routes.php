<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::index');
$routes->post('/login', 'Home::index');
$routes->post('/', 'Home::index');
$routes->get('/register', 'Home::register');
$routes->post('/register', 'Home::register');
$routes->get('/predict', 'Home::predict');
$routes->post('/predict', 'Home::predict');
