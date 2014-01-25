<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth_Auth extends Controller_Base {

	public function before()
	{
		parent::before();
	}
	
	public function action_index()
	{
	if(isset($_POST['submit']))
	{
	$data=Arr::extract($_POST,array('username','email','password','password_confirm'));
	//echo Debug::vars($data);
	try{
	$users=ORM::factory('user');
	$users->create_user($data, array('username', 'password', 'email'));
	$role=ORM::factory('role')->where('name','=','login')->find();

	$users->add('roles',$role);
		$this->action_login();
	} catch (ORM_Validation_Exception $e) {
	
	$errors=$e->errors('auth'); //aplication/message
	
	}

	}
	$content=View::factory('auth/v_reg')->bind('errors',$errors)->bind('data',$data);
	$this->template->block_center[]=$content;
	}
	public function action_login() {
	if($_POST){
	$data=Arr::extract($_POST,array('username','password'));
	try{
	Auth::instance()->login($data['username'],$data['password'],true);
	if(Auth::instance()->logged_in()){
	$this->auth=Auth::instance();
	$this->user=$this->auth->get_user();
	}
	$this->redirect('/');
	}catch (ORM_Validation_Exception $e) {
	$errors=array(Kohana::message('auth/user'));
	}
	}
	$content=View::factory('auth/v_login')->bind('errors',$errors)->bind('data',$data);
	$this->template->block_center[]=$content;
	}
	
	public function action_logout() {
	try{
	Auth::instance()->logout();
	} catch (ORM_Validation_Exception $e) {
	$errors=array(Kohana::message('auth/user'));
	}
	$content=View::factory('auth/v_logout');
	$this->template->block_center[]=$content;
	}
} // End Welcome
