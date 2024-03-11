<?php

/**
 * 
 */
namespace application\controllers;

use application\core\Controller;


class MainController extends Controller{
	
	public function before(){
		//$this->view->layout = 'custom';

	}
	 public function indexAction()
	{
		
		
		//$db = new Db;
		//$form = '1; DELETE FROM Main';
		//$params = [
		//	'id' => $form,
		//];

		//$data = $db->column('SELECT name FROM Main WHERE id = :id', $params);
	
		//debug($data);
	

	$vars = [
			'name' => 'Max',
			'age' => 77,
			'arr' => [1, 2, 3],
         ];
		$this->view->render('Haupt seite', $vars);
		

	}
	public function contactAction()
	{
		
		//$this->view->render('Haupt seite');

		echo 'Contact Seite';
		

	}


}