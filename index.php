<?php 
require 'config/route.php'; 
// require 'config/view.php';
include 'controller/AboutController.php';
include 'controller/MainController.php';
// define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../'));
// define('APPLICATION_NAME', realpath(dirname(__DIR__) . '/../'));


Route::add('/', 'MainController::home');

$route::add('/about', 'MainController::about');

$route::add('/contact' , 'Contact');

$route::add('/test' , 'MainController::home');

$route::add('/coupon', 'MainController::Coupon');

$route::add('/cart', 'MainController::cart');

$route::add('category', 'MainController::category');

$route::add('/content-course', 'MainController::content_course');

$route::add('/course', 'MainController::course');

$route::add('/faq' , 'MainController::faq');

$route::add('/history' , 'MainController::history');

$route::add('/payment' , 'MainController::payment');

$route::add('/policy' , 'MainController::policy');

$route::add('/teacher' , 'MainController::teacher');

$route::add('/user-course' , 'MainController::user_course');

$route::add('/user' , 'MainController::user');

$route::add('/countdown' , 'MainController::countdown');


?>