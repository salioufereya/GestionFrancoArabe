<?php


class Route
{
	private $controller = 'Home';
	private $method 	= 'view';
	private function splitURL()
	{
		$URL = $_SERVER['REQUEST_URI'] ?? 'home';
		$URL = explode("/", trim($URL,"/"));
		return $URL;
	}
	public function loadController()
	{
		$URL = $this->splitURL();	
		/** select controller **/
		$filename = "../controllers/".ucfirst($URL[0])."Controller".".php";
		if(file_exists($filename))
		{
			require_once $filename;
			$this->controller = ucfirst($URL[0])."Controller";
			
		}else{
			$filename = "../controllers/_404.php";
			require_once $filename;
			$this->controller = "_404";
			
		}
		$controller = new $this->controller;
	    $method= $URL[1];
     
		/** select method **/
		
		if(!empty($URL[1]))
		{		
			if(method_exists($controller, $URL[1]))
			{
				$this->method = $URL[1];
				$controller->$method();
				return;
			}else
			{
				echo "Method not exist";
				return;
			}
		}
	    	call_user_func_array([$controller,$this->method], $URL);
	}	

}


