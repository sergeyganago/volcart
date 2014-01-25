<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller_Base {

	public function before()
	{
		parent::before();
	}
	
	public function action_index()
	{
	$id=$this->request->param('id');
    $a=ORM::factory('new');
    if($id){  

	$news=$a->where('id','=',$id)->find();
    $content=View::factory('templates/v_new', array('news' => $news));
       
    }
    else{
        
    $news=$a->find_all();
    $content=View::factory('templates/v_news', array('news' => $news));
    }

	
	$this->template->block_center[]=$content;
    //echo $content;
	}
	
} // End Welcome
