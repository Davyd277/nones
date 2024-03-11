<?php

/**
 * 
 */
namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class NewsController extends Controller{
	
	 public function showAction()
	{
		$result = $this->model->getNews();
		$vars = [
			'news' => $result,
		];
		


		$this->view->render('News seite', $vars);
	}

}