<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User{
	public function labels(){
		return array (
		'username' => 'Логин',
		'email' => 'E-mail',
		'password' => 'Пароль',
		'password_confirm' => 'Повтор пароля'
		);
	}
	
	public function rules(){
		return array(
			'email' => array(
				array('not_empty'),
				array('min_length',array(':value',5)),
				array('max_length',array(':value',127)),
				array('email'),
				array(array($this, 'uniq_alias'),array(':value',':field'))
				
			),
			'password' =>array(
				array('not_empty'),
			)
		);	
	}
	
	public function uniq_alias($value, $field){
		$page=ORM::factory($this->_object_name)
		->where($field,'=',$value)
		->and_where($this->_primary_key, '!=',$this->pk())
		->find();
		
		if ($page->pk()){
		return false;
		} else {return true;}
	}
}// Model_User