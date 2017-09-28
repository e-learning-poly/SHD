<?php
Route::add('/login-admin' , 'AdminController::view_login_admin');

Route::add('/test' , 'AdminController::showCourses');

Route::add('/dashboard' , 'AdminController::view_dashboard');

?>