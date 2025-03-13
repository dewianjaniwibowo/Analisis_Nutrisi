<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/analisis_nutrisi', 'AnalisisNutrisi::index');
$routes->get('/makanan', 'Makanan::index');
$routes->post('/makanan/hitung', 'Makanan::hitung');

