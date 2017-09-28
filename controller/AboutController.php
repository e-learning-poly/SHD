<<<<<<< HEAD
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
=======
<?php
/**
* AboutController
*/
class AboutController 
{
	
	function __construct(){}

	function about(){
		echo 'hello';
	}
}
>>>>>>> b131e3337ca20ff99a98e6a25ce0e3ed956fe21f
