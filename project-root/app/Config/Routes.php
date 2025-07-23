<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/auth/login', 'Home::login');

$routes->post('/login', 'AuthController::login');
$routes->get('/dashboard', 'AuthController::dashboard');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/student/register', 'StudentController::register');
$routes->post('/student/store', 'StudentController::store');
$routes->get('/student/list', 'StudentController::getAllStudents');

$routes->get('/courses/create', 'CourseController::create');
$routes->post('/courses/store', 'CourseController::store');