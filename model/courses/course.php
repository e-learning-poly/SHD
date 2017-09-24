<?php
namespace model\courses;

/**
 * Khóa học
**/

class Course
{
	/**
	 * Lấy khóa học
	**/
	public function getCourse()
	{
		$query = "SELECT `id_courses`, `course_name`, `course_gallery`, `course_describe`, `course_status`, `course_slug`, `id_categories`, `category_name`, `course_start_day`
							FROM `_courses` ";
		$result = $db->query($query);
		return $result;
	}

	/**
	 * Thêm khóa học
	**/
	public function addCourse($name, $images, $describe, $slug, $categoryName, $dateEnd)
	{
		/**
		 * Ngày tạo
		**/
		$date = new DateTime();
		$dateCreate = $date->format('d-m-Y H:i:s');

		/**
		 * Token khóa học
		**/
		$token = sha1(uniqid(rand(), true));
		$subToken = substr($token, 0, 20);

		$query = "INSERT INTO
							`_courses`(`id_courses`, `course_name`, `course_gallery`, `course_describe`, `course_status`, `course_slug`, `course_token`, `category_name`, `course_start_day`, `course_end_day`)
							VALUES
							(null, `$name`, `$images`, `$describe`, `0`, `$slug`, `$subToken`, `$categoryName`, `$dateCreate`, `$dateEnd`)";

		$result = $db->exec($query);
		return $result;
	}

}



?>
