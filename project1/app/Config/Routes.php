<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('welcome', 'Welcome::index');

// $routes->get('welcome/about', 'Welcome::about');

//for name[argument]
// :num --> numbers only, :segment --> string, 
// :any --> any character, :alpha --> letters only

$routes->get('wab/(:segment)', 'Welcome::about/$1');// about/$1/$2 --> multiple parameter
$routes->get('welcome/page', 'Welcome::page');
$routes->setAutoRoute(true);
$routes->get('intro', 'Welcome::intro');
$routes->get('tables', 'Tables::tables');
$routes->get('students', 'Students::profile');