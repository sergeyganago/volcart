<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Adminka_News extends Controller_Adminka_Main {

public function before()
{
parent::before();
$this->template->scripts[]='media/ckeditor/ckeditor/ckeditor.js';
}

public function action_index()
{
$count_all=ORM::factory('new')->count_all();
$pagination=Pagination::factory(array('total_items'=>$count_all))->route_params(array('directory'=>strtolower(Request::current()->directory()), 'controller'=>strtolower(Request::current()->controller()), 'action'=>strtolower(Request::current()->action())));
$news=ORM::factory('new')->order_by('id','DESC')->limit($pagination->items_per_page)->offset($pagination->offset)->find_all();
$main=View::factory('adminka/v_news')->bind('news',$news)->bind('pagination', $pagination);
$this->template->block_center[]=$main;
}

public function action_delete() {
$id=$this->request->param('page');
$del=ORM::factory('new')->where('id','=',$id)->find();
if($del->image){
$dir=$_SERVER['DOCUMENT_ROOT'].Kohana::$base_url."media/images/";
$pic_big=$dir.$del->image;
$pic_small=$dir.$del->image_small;
@unlink($pic_big);
@unlink($pic_small);
}
$del->delete();
$this->redirect('adminka/news');
}

public function action_hide(){
$id=$this->request->param('page');
$showhide=ORM::factory('new',$id);
$showhide->showhide='hide';
$showhide->save();
$this->redirect('adminka/news');
}

public function action_show(){
$id=$this->request->param('page');
$showhide=ORM::factory('new',$id);
$showhide->showhide='show';
$showhide->save();
$this->redirect('adminka/news');
}

public function action_edit() {
$id=$this->request->param('page');
$data=ORM::factory('new')->where('id','=',$id)->find()->as_array();
if(!empty($_POST['submit'])){
$news=ORM::factory('new',$id);
$post=Arr::extract($_POST,array('name','text','showhide'));
$news->name=$post['name'];
$news->text=$post['text'];
$news->showhide=$post['showhide'];
try{
$news->save();
$this->redirect('adminka/news');
}catch(ORM_Validation_Exception $e){
$errors=$e->errors('validation');
}
}
$main=View::factory('adminka/news/v_edit')->bind('data',$data)->bind('errors',$errors);
$this->template->block_center[]=$main;
}

public function action_add() {
if(!empty($_POST['submit'])){

$bigfile='';
if(!empty($_FILES['images']['name'][0])){

foreach($_FILES['images']['tmp_name'] as $image){
$filename=$this->_upload_img($image);
$bigfile.=$filename.":";
}

}

$news=ORM::factory('new');
$post=Arr::extract($_POST,array('name','text','showhide'));
$news->name=$post['name'];
$news->text=$post['text'];
$news->showhide=$post['showhide'];
$news->image=$bigfile;
try{
$news->save();
$this->redirect('adminka/news');
}catch(ORM_Validation_Exception $e){
$errors=$e->errors('validation');
}
}
$main=View::factory('adminka/news/v_add')->bind('data',$data)->bind('errors',$errors);
$this->template->block_center[]=$main;
}

}