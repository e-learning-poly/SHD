<?php
namespace model\validate;
/**
 * Validate
**/
function validateForm
{
  /**
   * Bắt lỗi form
  **/
  function validate($inputForm, $alert)
  {

    if($inputForm === "email")
    {
      if(!filter_var($inputForm,FILTER_VALIDATE_EMAIL) === false || !preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$inputForm)){
        echo "<p class=" . "text-danger" . ">" . $alert . "</p>";
        return false;
      }else{
        return true;
      }
    }
    else if($inputForm === "number")
    {
      if(!preg_match('/^[0-9]*$/',$inputForm) || !is_numeric($inputForm) || !filter_var($inputForm,FILTER_VALIDATE_INT) === false){
        echo "<p class=" . "text-danger" . ">" . $alert . "</p>";
        return false;
      }else{
        return true;
      }
    }
    else if($inputForm === "text")
    {
      if(!preg_match('/^([%\$#\*\'\"\()]+)${5,20}/',$inputForm) || !filter_var($inputForm,FILTER_SANITIZE_STRING)){
        echo "<p class=" . "text-danger" . ">" . $alert . "</p>";
        return false;
      }else{
        return true;
      }
    }

  }

  /**
   *
  **/
}
