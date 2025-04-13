<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AnalisisNutrisi::index');
$routes->get('/analisis_nutrisi', 'AnalisisNutrisi::index');
$routes->get('/makanan', 'Makanan::index');
$routes->match(['get', 'post'], 'makanan/hitung', 'Makanan::hitung');

// Tambahkan routing baru di sini
$routes->post('/makanan/tambah', 'Makanan::simpan'); // Perbaikan: Sesuai nama fungsi yang dibuat
$routes->get('/makanan/hapus/(:num)', 'Makanan::hapus/$1');

$routes->get('artikel', 'Artikel::index');
$routes->get('artikel/(:segment)', 'Artikel::detail/$1');

$routes->get('konsultasi', 'Konsultasi::index');
$routes->get('konsultasi/chat/(:num)', 'Konsultasi::chat/$1');
$routes->get('tentang', 'Tentang::index');

$routes->get('/register', 'Auth::register');
$routes->post('/auth/save', 'Auth::save');




