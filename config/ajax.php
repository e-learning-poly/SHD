<?php

// system ajax: pass param to method of class

if(!empty($_POST) && isset($_POST['method']) && isset($_POST['name_controller'])) {
	// create new object from name controller
    $object = new $_POST['name_controller']();

    // create new method of controller
    $object->$_POST['method']();
}


?>