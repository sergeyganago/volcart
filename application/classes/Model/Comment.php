<?php defined('SYSPATH') or die('No direct script access.');

class Model_Comment extends ORM {
	//esli tablica nazivartsya maintext
	//protected $_table_name = 'maintexts';
	//protected $_primary_key = 'id';
	
	//esli v drugoi gruppe nastroek v database.php
	//protected $_db_group = 'defaults';
	
	protected $_belongs_to=array('news'=>array('model'=>'new','foreign_key'=>'new_id'));
	

} // End Maintext
//SELECT * FROM maintexts vizov modeli ravnoznachen