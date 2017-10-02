<?php
<<<<<<< HEAD
use config\basic\View;
use config\basic\Route;

Route::add('/', 'MainController::home');

Route::add('/about', 'MainController::about');
=======
Route::add('/', 'MainController::home');

Route::add('/about', 'AboutController::about');

Route::add('/contact' , 'Contact');
>>>>>>> origin/master

Route::add('/coupon', 'MainController::Coupon');

Route::add('/cart', 'MainController::cart');

Route::add('category', 'MainController::category');

Route::add('/content-course', 'MainController::content_course');

<<<<<<< HEAD
// Route::add('/course', 'MainController::course');
=======
Route::add('/course', 'MainController::course');
>>>>>>> origin/master

Route::add('/faq' , 'MainController::faq');

Route::add('/history' , 'MainController::history');

Route::add('/payment' , 'MainController::payment');

Route::add('/policy' , 'MainController::policy');

Route::add('/teacher' , 'MainController::teacher');

Route::add('/user-course' , 'MainController::user_course');

Route::add('/user' , 'MainController::user');

Route::add('/countdown' , 'MainController::countdown');

<<<<<<< HEAD
if(isset($_GET['param'])){
	Route::add("/course/".$_GET['param'] , 'MainController::course');
}

Route::add('/user/setting' , 'MainController::course');

Route::add('/404' , 'MainController::demo');


$route = new Route;
$route->getRequestURL();
=======
Route::add('/demo' , function (){
  echo "404 Error";
});


>>>>>>> origin/master
?>