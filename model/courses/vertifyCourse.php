<?php
namespace model\vertify;

/**
 * Kich hoạt
**/
class active
{
  /**
   * Kich hoạt người dùng
  **/
  function activeUser ($id_user, $email, $token)
  {
    /**
     * Cập nhật
    **/
    $date = new DateTime();
    $datetime = $date->format('d-m-Y H:i:s');

    $query = "UPDATE `_users`
              SET `user_active`=`1`,`user_date_modified`=`$date`
              WHERE `user_id` = `$id_user` AND `user_email` = `$email` AND `user_token` = `$token`";

    $result = $db->exec($query);
    return $result;
  }

  /**
   * Kích hoạt khóa học
  **/
  function activeCourse ($id_course, $id_user, $token)
  {
    /**
     * Cập nhật
    **/
    $date = new DateTime();
    $datetime = $date->format('d-m-Y H:i:s');

    $query = "UPDATE `_coursesdetails`
              SET `course_status` = `1`,`course_date_active`= `$datetime`
              WHERE `id_courses` = `$id_course` AND `id_user` = `$id_user` AND `course_token` = `$token`";

    $result = $db->exec($query);
    return $result;
  }

}
