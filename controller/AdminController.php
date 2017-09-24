<?php
require __DIR__ . '/../vendor/autoload.php';
// require __DIR__ . '/../config/view.php';
/**
 * Admin Controller
**/
class AdminController
{
    private $view;
    private $config = array();
    function __construct()
    {
      $view = new View();
      $this->view = $view;

      $config = require __DIR__ .'/../config/config.php';
      $this->config = $config;


    }

    /**
     * Admin
    **/

    function admin()
    {

      echo $this->view->render('loginAdmin@admin', array( 'foo' => 'bar' ));
    }

    /**
     * Get User
    **/

    function getUser()
    {

    }
}
