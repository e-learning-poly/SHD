<?php
namespace model\users;


/*
 * User
 */
class users
{
  /*
   * lấy User
   */
  function getUser()
  {
    $query = "SELECT
            `id_user`, `user_email`, `user_name`, `user_address`, `user_phone`, `user_password`, `user_token`, `user_role`, `user_date_created`, `user_date_modified`
            FROM `_users`";
    $result = $db->query($query);
    return $result;
  }

  /*
   * Lấy User theo ID
   */

  function getUserInstant($id)
  {
    $query = "SELECT
              `id_user`, `user_email`, `user_name`, `user_address`, `user_phone`, `user_password`, `user_token`, `user_role`, `user_date_created`, `user_date_modified` FROM `_users`
              WHERE `user_id` = `$id`";
    $result = $db->query($query);
    $results = $result->fetchAll();
    return $results;
  }

  /*
   * Đăng nhập
   */
   function loginUser($username,$password)
   {
     $passwords = md5($password);
     $query = "SELECT
              `user_email`, `user_password`, `user_role`, `user_token` FROM `_users`
              WHERE `user_email` = `$username` AND `user_password` = `$passwords`";
     $result = $db->query($query);
     return $result;
   }

   /*
    * Cập nhật
    */

   function userUpdate($id,$address,$phone,$password)
   {
     /* User Password*/
     $passwords = md5($password);

     /* Date Modified */
     $date = new DateTime();
     $dateModified = $date->format('d-m-Y H:i:s');

     $query = "UPDATE
              `_users`
              SET
              `user_address`= `$address`, `user_phone`=`$phone`, `user_password`=`$passwords`, `user_date_modified`=`$dateModified`
              WHERE `id_user` = `$id`";
     $result = $db->exec($query);
     return $result;
   }

   /*
    * Thêm người dùng
    */
    function addUser($username, $email, $address, $phone, $password)
    {
      /* User password*/
      $passwords = md5($password);

      /* User token */
      $token = md5(uniqid(rand(), true));

      /* Date Time */
      $date = new DateTime();
      $dateTimeCreate = $date->format('d-m-Y H:i:s');

      $query = "INSERT INTO
              `_users`(`id_user`, `user_email`, `user_name`, `user_address`, `user_phone`, `user_password`, `user_token`, `user_date_created`)
                VALUES
              (null, `$email`, `$username`, `$address`, `$phone`, `$passwords`, `$token`, `$dateTimeCreate`)";

      $result = $db->exec();
      return $result;
    }


}
?>
