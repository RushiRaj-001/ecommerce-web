<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/register', 'Home::register');
$routes->post('/register', 'Home::register');

$routes->get('/login', 'Home::login');
$routes->post('/login', 'Home::login');

$routes->get('/product', 'ProductController::product');
$routes->get('/create', 'ProductController::create');
$routes->post('/product-store', 'ProductController::store');


$routes->get('/admin_dashboard', 'AdminDashboard::admin_dashboard');
$routes->post('/admin_dashboard', 'AdminDashboard::admin_dashboard');

$routes->get('/user_dashboard', 'Dashboard::user_dashboard');

$routes->get('product/edit/(:num)','ProductController::edit/$1');
$routes->post('product/update/(:num)','ProductController::update/$1');

$routes->get('product/delete/(:num)','ProductController::delete/$1');
