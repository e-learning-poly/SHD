<?php
session_start();
require __DIR__ .'/../vendor/autoload.php';
require __DIR__ .'/../config/ajax.php';
use config\basic\View;
// require __DIR__ .'/../config/view.php';

//test
// $course = new model\courses\Course;
// $course->getCourse();


/**
* AdminController
*/
class AdminController
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

	function view_login_admin(){
		unset($_SESSION['user']);
		echo $this->view->render('login@admin', array('foo' => 'bar'));
	}

	function view_dashboard(){
		if(isset($_SESSION['user'])){
			$courses = new  model\courses\Course;
			$authors = $courses->getAuthor();
			$categories = $courses->getCategory();

			echo $this->view->render('dashboard@admin', array(
								'authors' => $authors,
								'categories' => $categories
			));
		}
		else
			echo $this->view->render('404', array('foo' => 'bar'));

	}

	function login_dashboard(){
		$_SESSION['user'] = array(
			'username' => $_POST['username'],
			'password' => $_POST['password']
		);

		$admin = new model\users\users;
		$admin = $admin->loginAdmin($_SESSION['user']['username'] , $_SESSION['user']['password']);

		//check role admin, ajax data
		if($admin == 1){
			$get_data = array(
				'login' => 'success'
			);
			header('Content-Type: application/json; charset=utf-8');
			echo $json = json_encode($get_data);
		}else{
			//echo $this->view->render('login@admin', array('foo' => 'bar'));
			$get_data = array(
				'login' => 'fail'
			);
			header('Content-Type: application/json; charset=utf-8');
			echo $json = json_encode($get_data);
		}
			
	}

	//get all courses
	function showCourses(){
		$courses = new  model\courses\Course;
		$courses = $courses->getCourseJoinAuthor();

		header('Content-Type: application/json; charset=utf-8');
	
		echo $json = json_encode($courses);
	}

	// delete course
	function DeleteCourse(){
		$id_course = $_POST['id_course'];

		$courses = new  model\courses\Course;

		$delete_courses = $courses->deleteCourse($id_course);

		$alert = array(
			'alert' => 'Delete Success'
		);

		header('Content-Type: application/json; charset=utf-8');
	
		echo $json = json_encode($alert);

	}

	function GetCourse(){
		$id = $_POST['id_course'];

		$course = new  model\courses\Course;

		$course = $course->getCourse($id);

		header('Content-Type: application/json; charset=utf-8');
	
		echo $json = json_encode($course);

	}

	// update course
	function UpdateCourse(){
		$id_course = $_POST['id_course'];
		$course_name = $_POST['course_name'];
		$course_gallery = $_POST['course_gallery'];
		$course_describe = $_POST['course_describe'];
		$course_slug = $_POST['course_slug'];
		$course_token = $_POST['course_token'];
		$id_categories = $_POST['id_categories'];
		$id_authors = $_POST['id_authors'];
		$course_price = $_POST['course_price'];
		$course_start = $_POST['course_start'];

		$courses = new  model\courses\Course;

		$update_course = $courses->updateCourse($id_course, $course_name, $course_gallery, $id_authors, $course_price, $course_describe, $course_slug, $course_token, $id_categories);

	}


	// add course
	function AddCourse(){
		$course_name = $_POST['course_name'];
		$course_gallery = $_POST['course_gallery'];
		$course_describe = $_POST['course_describe'];
		$course_slug = $_POST['course_slug'];
		$course_token = $_POST['course_token'];
		$id_categories = $_POST['id_categories'];
		$id_authors = $_POST['id_authors'];
		$course_price = $_POST['course_price'];
		
		$courses = new  model\courses\Course;

		$add_course = $courses->addCourse($course_name, $course_gallery, $id_authors, $course_price, $course_describe, $course_slug, $course_token, $id_categories);

		//if($add == true){
			$alert = array(
				'alert' => 'Add Success'
			);
		//}
		

		header('Content-Type: application/json; charset=utf-8');
	
		echo $json = json_encode($alert);
	}

}



?>
