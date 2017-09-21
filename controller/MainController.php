<?php
require __DIR__ .'/../vendor/autoload.php';
require __DIR__ .'/../config/view.php';

//test
// $course = new model\courses\Course;
// $course->getCourse();


/**
* MainController
*/
class MainController 
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

	function home(){
		echo $this->view->render('index', array('foo' => 'bar'));
	}

	function about(){
		//$db = new model\database\dbconnect($this->config);
		
		return $this->view->render('about-us', array('foo' => 'bar'));
		// echo $this->view->render('course', array('foo' => 'bar'));
		
	}

	function test(){
		echo $this->view->render('test', array('foo' => 'bar'));
	}

	function Coupon(){
		$_POST['action'];

		$get_data = array($_POST['action']);
		
		header('Content-Type: application/json; charset=utf-8');

		$json = json_encode($get_data);
		
		// return $this->view->render('index', array('foo' => $json));
		// /header('Content-Type: text/html; charset=utf-8');
		//echo $this->view->render('index', array('foo' => $json));
	}

	function cart(){
		echo $this->view->render('cart', array('foo' => 'bar'));
	}

	function category(){
		return $this->view->render('category', array('foo' => 'bar'));
	}

	function content_course(){
		echo $this->view->render('content-course', array('foo' => 'bar'));
	}

	function course(){
		echo $this->view->render('course', array('foo' => 'bar'));
	}

	function faq(){
		echo $this->view->render('faq', array('foo' => 'bar'));
	}

	function history(){
		echo $this->view->render('history', array('foo' => 'bar'));
	}

	function payment(){
		echo $this->view->render('payment', array('foo' => 'bar'));
	}

	function policy(){
		echo $this->view->render('policy', array('foo' => 'bar'));
	}

	function teacher(){
		echo $this->view->render('teacher', array('foo' => 'bar'));
	}

	function user_course(){
		echo $this->view->render('user-course', array('foo' => 'bar'));
	}

	function user(){
		echo $this->view->render('user', array('foo' => 'bar'));
	}

	function countdown(){
		$db = new model\database\dbconnect($this->config);
		$select = "SELECT * FROM countdown";
		$result = $db->query($select);
		$get_data = array();
		foreach ($result as $data) {
			// thêm phần tử vào cuối mảng $get_data[]
			if($data['active'] == 1 ){
				array_push($get_data, $data);
			}
			//var_dump($data);
		}
		header('Content-Type: application/json; charset=utf-8');
		echo $json = json_encode($get_data);
		//return $json;
	}



}

if(!empty($_POST) && isset($_POST['action']) && $_POST['action'] == 'countdown') {
    $object = new MainController();
    $object->countdown();
}


?>