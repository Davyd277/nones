<?php

namespace application\core;

use application\core\View;

abstract class Controller {


	public $route;
	public $view;
	
	 public function __construct($route){
	    session_start();
	 	$this->route = $route;
	 	$this->view = new View($route);
	 	$this->model = $this->loadModel($route['controller']);

	 	//$this->before();
		}

	 	public function loadModel($name){
	 		$path = 'application\models\\'.ucfirst($name);
	 		if (class_exists($path)){
	 		return new $path;
	 		}
	 	}
	 	//var_dump($view);
	 	//$this->view = new View;
	 	//$this->view = new View;
	 
}
