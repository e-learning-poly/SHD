<?php
class View 
{
    function render($file, $variables = array()) 
    {
    	// get param in render
        extract($variables);
        
        // run render
        ob_start();
        if(file_exists('public/'.$file.'.php')){
        	include_once 'public/'.$file.'.php';
        }else{
        	include_once 'public/404.php';
        }
        $renderedView = ob_get_clean();
        echo $renderedView;
    }


}





?>