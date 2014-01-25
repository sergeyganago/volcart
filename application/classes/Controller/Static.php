<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Static extends Controller_Base {

	public function before()
	{
		parent::before();
	}
	
	public function action_index()
	{
	$id=$this->request->param('id');
	//echo $id;
	
	//insert
	/*$a = ORM::factory('maintext');
	$a->name = 'Добро пожаловать на сайт';
	$a->body='Текст c html new 5';
	$a->url=$id;
	$a->lang='ru';
	$a->showhide='show';
	$a->putdate = date('y-m-d');
	$a->save();*/
	
	//update
	/*$id = 7;
	$a = ORM::factory('maintext', $id);
	$a->name='Название сайта';
	$a->save();*/
	
	//delete
	/*$id = 7;
	$a = ORM::factory('maintext', $id);
	if($a -> loaded()){
	$a->delete();
	}*/
	
	//select
	$static=ORM::factory('maintext')->where('url','=',$id)->find();
	//echo $static->name;
	$content=View::factory('templates/v_static')->bind('static',$static);
	$this->template->block_center[]=$content;
	}
	
} // End Welcome
