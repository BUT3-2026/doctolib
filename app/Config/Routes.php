<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes -> get ('test','Home::test');

/* Routes pour les patients */
$routes -> get('patients','Patients::index');


/* Routes pour les praticiens */
$routes -> get('praticiens/specialite/(:num)','Praticiens::index/$1');