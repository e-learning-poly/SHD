<?php

class View
{
    function render($file, $variables = array() )
    {
    	// get param in render
        extract($variables);

        // run render
        ob_start();

        if(strpos($file, '@admin'))
        {
          $files = explode('@',$file);

          if(file_exists('public/admin/' . $files[0] . '.php'))
          {
            include_once 'public/admin/'.$files[0].'.php';
          }
          else
          {
              include_once 'public/404.php';
          }
        }
        else
        {
          if(file_exists('public/'.$file.'.php'))
          {
            include_once 'public/'.$file. '.php';
          }
          else
          {
          	include_once 'public/404.php';
          }
        }


        $renderedView = ob_get_clean();
        echo $renderedView;
    }


}





?>
