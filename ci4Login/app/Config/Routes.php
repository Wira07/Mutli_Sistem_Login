<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('register', 'Home::register');
$routes->get('login', 'Home::index');
$routes->get('user', 'Home::user');

