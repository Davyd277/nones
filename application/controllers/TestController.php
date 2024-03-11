<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class TestController extends Controller{
	
	 public function testAction()
	{
	if(!empty($_POST)){
			exit(json_encode(['status' => 'success', 'message' => 1237634]));
		}
		


		$this->view->render('Test seite');
	}

}