<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/v2','Home::indexv2');
$routes->get('/menu','Home::menu');
$routes->get('/landing-page','Home::landingpage');
$routes->get('/landing-page-v2','Home::landingpagev2');