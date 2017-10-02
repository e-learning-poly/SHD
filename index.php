<?php
require 'config/config.php';
<<<<<<< HEAD


// require 'config/view.php';
=======
require 'config/route.php';

// require 'config/view.php';
include 'controller/AboutController.php';
>>>>>>> origin/master
include 'controller/MainController.php';
include 'controller/AdminController.php';
// define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../'));
// define('APPLICATION_NAME', realpath(dirname(__DIR__) . '/../'));

include 'route/user.php';
include 'route/admin.php';

?>
