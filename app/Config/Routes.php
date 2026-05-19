<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/main', 'Home::index');
$routes->get('/main-v2','Home::indexv2');
$routes->get('/menu','Home::menu');
$routes->get('/','Home::landingpage');
$routes->get('/v2','Home::landingpagev2');