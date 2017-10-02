<?php
require __DIR__ .'/../vendor/autoload.php';
require __DIR__ .'/../config/ajax.php';
use config\basic\View;
// require_once __DIR__ .'/../config/view.php';
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
		$view = new config\basic\View();
		$this->view = $view;

		$config = require __DIR__ .'/../config/config.php';
		$this->config = $config;
		//var_dump($config);
	}

	function demo(){
		echo $this->view->render('404', array('courses' => 'a'));
	}

	/**
	* Home
	*/

	function home()
	{
		$courses = new  model\courses\Course;
		$courses = $courses->getCourseJoinAuthor();

		echo $this->view->render('index', array('courses' => $courses));
	}

	/**
	* About
	*/

	function about()
	{
		//$db = new model\database\dbconnect($this->config);
		return $this->view->render('about-us', array('foo' => 'bar'));
		// echo $this->view->render('course', array('foo' => 'bar'));

	}

	/**
	* Coupon
	*/

	function Coupon()
	{
		$_POST['action'];

		$get_data = array($_POST['action']);

		header('Content-Type: application/json; charset=utf-8');

		$json = json_encode($get_data);

		// return $this->view->render('index', array('foo' => $json));
		// /header('Content-Type: text/html; charset=utf-8');
		//echo $this->view->render('index', array('foo' => $json));
	}

	/**
	* Cart
	*/

	function cart()
	{
		echo $this->view->render('cart', array('foo' => 'bar'));
	}

	/**
	* Category
	*/

	function category()
	{
		return $this->view->render('category', array('foo' => 'bar'));
	}

	/**
	* Content Course
	*/

	function content_course(){
		echo $this->view->render('content-course', array('foo' => 'bar'));
	}

	/**
	* Course
	*/

	function course($slug)
	{

		$basename =  basename(dirname(dirname(__FILE__)));

		//get url server
		$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
		//$url = substr( $url,  strlen($basename)+1 , strlen($url));

		$url = explode('/', $url);

		$courses = new  model\courses\Course;
		$course = $courses->getCourseSlug($url[3]);

		if (count($course) == 0) {
			echo $this->view->render('404');
		}else{
			echo $this->view->render('course', array('course' => $course));
		}
		
		
	}

	/**
	* Faq
	*/

	function faq()
	{
		echo $this->view->render('faq', array('foo' => 'bar'));
	}

	/**
	* History
	*/

	function history()
	{
		echo $this->view->render('history', array('foo' => 'bar'));
	}

	/**
	* Payment
	*/

	function payment()
	{
		echo $this->view->render('payment', array('foo' => 'bar'));
	}

	/**
	* Policy
	*/

	function policy()
	{
		echo $this->view->render('policy', array('foo' => 'bar'));
	}

	/**
	* Teacher
	*/

	function teacher()
	{
		echo $this->view->render('teacher', array('foo' => 'bar'));
	}

	/**
	* User Course
	*/

	function user_course()
	{
		echo $this->view->render('user-course', array('foo' => 'bar'));
	}

	/**
	* User
	*/

	function user()
	{
		echo $this->view->render('user', array('foo' => 'bar'));
	}

	/**
	* Count Down
	*/

	function countdown()
	{
		$db = new model\database\dbconnect($this->config);
		$select = "SELECT * FROM _coupon";
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


	/**
	* Admin
	*/

	function admin()
	{
			echo $this->view->render('index@admin', array('foo' => 'bar'));
	}

	function test()
	{
			echo $this->view->render('test@test', array('foo' => 'bar'));
	}


}



?>
