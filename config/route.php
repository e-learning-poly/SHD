<?php

/**
* route
*/
class Route
{
	static private $uri = array();
	static private $_method = array();
	static private $count = -1;
	function __construct(){

	}

	// add route
	function add($uri, $method = null)
	{

		// $this->uri[] = '/' . trim($uri,'/');
		self::$count += 1;
		self::$uri += array(
			self::$count => '/' . trim($uri,'/'),
		);

		// echo "<pre>";
		// print_r($_GET['uri']);
		// echo "</pre>";
		// // if(in_array($_GET['uri'],self::$uri))
		// {
		// 		echo "Route exist";
		// }

		if($method != null){
			// $this->_method[] = $method;
			self::$_method[] = $method;
		}

		//print_r(self::$uri);

		self::submit();
		return self::$uri = array();

	}


	// run route
	private static function submit()
	{
		// get url
		$uriGetParam = isset($_GET['uri']) ? '/' . $_GET['uri'] : '/';
		foreach(self::$uri as $key => $value)
		{
			// echo '<br>';
			// print_r(self::$uri[$key]);
			if(preg_match("#^$value$#", $uriGetParam)){

				if(is_string(self::$_method[$key])){
					$useMethod = self::$_method[$key];

					// check controller and function of controller
					if(strpos($useMethod, '::') == true){
						// get name function of controller
						$function = substr( $useMethod,  strpos($useMethod, '::')+2 , strlen($useMethod) );

						// get name of controller
						$useMethod = substr( $useMethod,  0 , strlen($useMethod) - strlen($function)-2);

						$useMethod = new $useMethod() ;
						$useMethod->$function();

					}else
						new $useMethod() ;
				}else
					call_user_func(self::$_method[$key]);
			}
		}

	}
}

$route = new Route();

?>
