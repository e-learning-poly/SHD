<?php
namespace model\courses;
use model\database\dbconnect;
use \Datetime;

class Course
{
	private $db;
	private $config = array();

	function __construct()
	{  
		$config = require __DIR__ .'/../../config/config.php';
		//var_dump($config);
		$this->config = $config;
		//var_dump($config);

		$db = new dbconnect($this->config);
		$this->db = $db;
	}

	function getCourseJoinAuthor(){
		$query = "SELECT _courses.id_courses, _courses.course_name, _courses.course_gallery, _courses.course_price, _courses.course_describe, _courses.course_start_day, _authors.author_name FROM _courses INNER JOIN _authors ON _courses.id_authors = _authors.id_authors ORDER BY _courses.id_courses ASC";

		$result = $this->db->query($query);

    	$results = $result->fetchAll();

    	return $results;

	}

	public function getAllCourse(){
		$query = "SELECT id_courses, course_name, course_gallery, id_authors, course_price, course_describe, course_slug, course_token, id_categories, course_start_day, course_end_day FROM _courses";
    
    	$result = $this->db->query($query);

    	$results = $result->fetchAll();

    	return $results;
	}

	public function getCourse($id){
		$query = "SELECT _courses.id_courses, _courses.course_name, _courses.course_gallery, _courses.course_price, _courses.course_describe, _courses.id_categories, _courses.course_start_day, _authors.author_name, _authors.id_authors FROM _courses INNER JOIN _authors ON _courses.id_authors = _authors.id_authors WHERE _courses.id_courses = $id";
    
    	$result = $this->db->query($query);

    	$results = $result->fetchAll();

    	return $results;
	}

	public function deleteCourse($id){
		$query = "DELETE FROM _courses WHERE id_courses = $id";

		$result = $this->db->exec($query);

		return $result;
	}

	/**
	 * đếm khóa học
	**/
	public function countCourse()
	{
		//$row = $result->rowCount();

		$count = "SELECT COUNT(*) FROM _courses";	
		$count = $this->db->query($count)->fetchColumn();
		return $count;

	}

	/**
	 * Thêm khóa học
	**/
	public function addCourse($name, $images, $authorId, $price, $describe, $slug, $token, $categoryId)
	{
		/**
		 * Ngày tạo
		**/
		$date = new DateTime();
		$dateCreate = $date->format('Y-m-d');

		/**
		 * Token khóa học
		**/
		$token = sha1(uniqid(rand(), true));
		$subToken = substr($token, 0, 20);

		$count = $this->countCourse() + 1;
		

		$query = "INSERT INTO
							_courses(id_courses, course_name, course_gallery, id_authors, course_price, course_describe, course_slug, course_token, id_categories, course_start_day, course_end_day)
							VALUES
							($count , '$name', '$images', '$authorId', '$price', '$describe', '$slug', '$subToken', '$categoryId', '$dateCreate', null)";

		$result = $this->db->exec($query);
		return $result;
	}

	function updateCourse($id, $course_name, $course_gallery, $id_authors, $course_price, $course_describe, $course_slug, $course_token, $id_categories){
		$query = "UPDATE _courses
					SET course_name = '$course_name', course_gallery = '$course_gallery', id_authors = '$id_authors', course_price = '$course_price', course_describe = '$course_describe', course_slug = '$course_slug', course_token = '$course_token', id_categories = '$id_categories'
					WHERE id_courses = $id";

		$result = $this->db->exec($query);
		return $result;
	}

	//get author
	function getAuthor(){
		$query = "SELECT id_authors, author_username, author_password, author_name, author_age, author_token, id_categories, author_information FROM _authors";

		$result = $this->db->query($query);
		return $result;
	}

	//get category
	function getCategory(){
		$query = "SELECT id_categories, category_name, category_quantity, category_classify FROM _categories";

		$result = $this->db->query($query);
		return $result;
	}
}

?>