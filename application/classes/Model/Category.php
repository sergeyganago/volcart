<?php defined('SYSPATH') or die('No direct script access.');

class Model_Category extends ORM_MPTT {

	
	public function rules(){
	return array(
	'name'=> array(array('not_empty'),)
	);
	}
	
	public function labels(){
	return array(
	'name'=> 'Название',
	);
	}

} 