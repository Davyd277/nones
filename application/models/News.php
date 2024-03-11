<?php

namespace application\models;
use application\core\Model;

class News extends Model {


	public function getNews(){
		
	$result = $this->db->row('SELECT title,  decription FROM news ');
	return $result;


	}
}