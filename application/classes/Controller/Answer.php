<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Answer extends Controller_Base {

	public function before()
	{
		parent::before();
	}
	
	public function action_index()
	{
	$id=$this->request->param('id');
	if($_POST){
	$a=ORM::factory('comment');
	$a->name=$_POST['name'];
	$a->text=$_POST['message'];
	$a->new_id=$id;
	$a->save();
	}
	if($id){
	$comm=ORM::factory('comment')->where('id','=',$id)->find();
	$content=View::factory('templates/v_comm',array('comm'=>$comm));
	$this->template->block_center[]=$content;
	}
	

	
	}
} // End Welcome
