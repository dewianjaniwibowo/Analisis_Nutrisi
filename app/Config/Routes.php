<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AnalisisNutrisi::index');
$routes->get('/analisis_nutrisi', 'AnalisisNutrisi::index');
$routes->get('/makanan', 'Makanan::index');
$routes->match(['get', 'post'], 'makanan/hitung', 'Makanan::hitung');

