<<<<<<< HEAD
<?php

// system ajax: pass param to method of class

if(!empty($_POST) && isset($_POST['method']) && isset($_POST['name_controller'])) {
	// create new object from name controller
    $object = new $_POST['name_controller']();

    // create new method of controller
    $object->$_POST['method']();
}


=======
<?php

// system ajax: pass param to method of class

if(!empty($_POST) && isset($_POST['method']) && isset($_POST['name_controller'])) {
	// create new object from name controller
    $object = new $_POST['name_controller']();

    // create new method of controller
    $object->$_POST['method']();
}


>>>>>>> b131e3337ca20ff99a98e6a25ce0e3ed956fe21f
?>