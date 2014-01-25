<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Adminka_Categories extends Controller_Adminka_Main {

public function before()
{
parent::before();
$this->template->scripts[]='media/ckeditor/ckeditor/ckeditor.js';
}

public function action_index()
{

$cat=ORM::factory('category');

if($_POST){
$cat_num=Arr::get($_POST, 'cat_num');

if(isset($_POST['add'])){
$name=Arr::get($_POST, 'name');
$cat->name=$name;

try{
if(!$cat_num){
$cat->make_root();
}
else{
$cat->insert_as_last_child($cat_num);
}
$this->redirect('adminka/categories');
}catch(ORM_Validation_Exception $e){
$errors=$e->errors('validation');
}

}

if(isset($_POST['delete'])){

if($cat_num){
ORM::factory('category', $cat_num)->delete();
}

}
}

$cat=$cat->fulltree()->as_array();
$main=View::factory('adminka/categories/v_categories')->bind('cat',$cat)->bind('errors',$errors);
$this->template->block_center[]=$main;
}


}