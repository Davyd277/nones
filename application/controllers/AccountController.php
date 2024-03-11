<?php

/**
 * 
 */
namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller{

	public function before(){
		//$this->view->layout = 'custom';

	}
	
	 public function loginAction()
	{
		
        //$this->view->redirect('/account/register'); 
		$this->view->render('Login');

	}
	 public function registerAction()
	{
		//$this->view->path = 'test/test';
		
		$this->view->render('Registr');
	}
}