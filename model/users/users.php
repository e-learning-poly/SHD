<?php
namespace model\users;
<<<<<<< HEAD
use model\database\dbconnect;
=======

>>>>>>> b131e3337ca20ff99a98e6a25ce0e3ed956fe21f

/*
 * User
 */
class users
{
<<<<<<< HEAD
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

=======
>>>>>>> b131e3337ca20ff99a98e6a25ce0e3ed956fe21f
  /*
   * lấy User
   */
  function getUser()
  {
    $query = "SELECT
<<<<<<< HEAD
            'id_user', 'user_email', 'user_name', 'user_address', 'user_phone', 'user_password', 'user_token', 'user_role', 'user_date_created', 'user_date_modified'
            FROM '_users'";
    
=======
            `id_user`, `user_email`, `user_name`, `user_address`, `user_phone`, `user_password`, `user_token`, `user_role`, `user_date_created`, `user_date_modified`
            FROM `_users`";
>>>>>>> b131e3337ca20ff99a98e6a25ce0e3ed956fe21f
    $result = $db->query($query);
    return $result;
  }

  /*
   * Lấy User theo ID
   */

  function getUserInstant($id)
  {
<<<<<<< HEAD
    $query = "SELECT id_user, user_email, user_name, user_address, user_phone, user_password, user_token, user_role, active, user_date_created, user_date_modified FROM _users WHERE 'id_user' = '$id'";
    
    $result = $this->db->query($query);
=======
    $query = "SELECT
              `id_user`, `user_email`, `user_name`, `user_address`, `user_phone`, `user_password`, `user_token`, `user_role`, `user_date_created`, `user_date_modified` FROM `_users`
              WHERE `user_id` = `$id`";
    $result = $db->query($query);
>>>>>>> b131e3337ca20ff99a98e6a25ce0e3ed956fe21f
    $results = $result->fetchAll();
    return $results;
  }

  /*
   * Đăng nhập
   */
   function loginUser($username,$password)
   {
<<<<<<< HEAD

      $passwords = md5($password);

      $query = "SELECT
              user_email, user_name, user_password, user_role, user_token FROM _users
              WHERE user_name = '$username' AND user_password = '$passwords' AND user_role = 0 ";

      $result = $this->db->query($query);
      $result = $result->rowCount();
      return $result;
     
=======
     $passwords = md5($password);
     $query = "SELECT
              `user_email`, `user_password`, `user_role`, `user_token` FROM `_users`
              WHERE `user_email` = `$username` AND `user_password` = `$passwords`";
     $result = $db->query($query);
     return $result;
>>>>>>> b131e3337ca20ff99a98e6a25ce0e3ed956fe21f
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
<<<<<<< HEAD
              '_users'
              SET
              'user_address'= '$address', 'user_phone'='$phone', 'user_password'='$passwords', 'user_date_modified'='$dateModified'
              WHERE 'id_user' = '$id'";
=======
              `_users`
              SET
              `user_address`= `$address`, `user_phone`=`$phone`, `user_password`=`$passwords`, `user_date_modified`=`$dateModified`
              WHERE `id_user` = `$id`";
>>>>>>> b131e3337ca20ff99a98e6a25ce0e3ed956fe21f
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
<<<<<<< HEAD
              '_users'('id_user', 'user_email', 'user_name', 'user_address', 'user_phone', 'user_password', 'user_token', 'user_date_created')
                VALUES
              (null, '$email', '$username', '$address', '$phone', '$passwords', '$token', '$dateTimeCreate')";
=======
              `_users`(`id_user`, `user_email`, `user_name`, `user_address`, `user_phone`, `user_password`, `user_token`, `user_date_created`)
                VALUES
              (null, `$email`, `$username`, `$address`, `$phone`, `$passwords`, `$token`, `$dateTimeCreate`)";
>>>>>>> b131e3337ca20ff99a98e6a25ce0e3ed956fe21f

      $result = $db->exec();
      return $result;
    }

<<<<<<< HEAD

=======
    
>>>>>>> b131e3337ca20ff99a98e6a25ce0e3ed956fe21f
}
?>
