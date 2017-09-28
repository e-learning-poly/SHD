<?php
require __DIR__ .'/../vendor/autoload.php';
//require __DIR__ .'/../config/view.php';
require __DIR__ .'/../config/ajax.php';
/**
* AboutController
*/
class AboutController 
{
	
	private $view;
	private $config = array();

	function __construct()
	{
		$view = new View();
		$this->view = $view;

		$config = require __DIR__ .'/../config/config.php';
		$this->config = $config;
		//var_dump($config);
	}

	function about(){
		echo $this->view->render('about-us', array('foo' => 'bar'));
	}

}
