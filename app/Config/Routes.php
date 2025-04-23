<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Profil::home');
$routes->get('pemweb', 'Profil::pemweb');
$routes->get('metopen', 'Profil::metopen');
$routes->get('sim', 'Profil::sim');
$routes->get('rpl', 'Profil::rpl');

$routes->setAutoRoute(false);
