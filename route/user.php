<?php
use config\basic\View;
use config\basic\Route;

Route::add('/', 'MainController::home');

Route::add('/about', 'MainController::about');

Route::add('/coupon', 'MainController::Coupon');

Route::add('/cart', 'MainController::cart');

Route::add('category', 'MainController::category');

Route::add('/content-course', 'MainController::content_course');

// Route::add('/course', 'MainController::course');

Route::add('/faq' , 'MainController::faq');

Route::add('/history' , 'MainController::history');

Route::add('/payment' , 'MainController::payment');

Route::add('/policy' , 'MainController::policy');

Route::add('/teacher' , 'MainController::teacher');

Route::add('/user-course' , 'MainController::user_course');

Route::add('/user' , 'MainController::user');

Route::add('/countdown' , 'MainController::countdown');

if(isset($_GET['param'])){
	Route::add("/course/".$_GET['param'] , 'MainController::course');
}

Route::add('/user/setting' , 'MainController::course');

Route::add('/404' , 'MainController::demo');


$route = new Route;
$route->getRequestURL();
?>