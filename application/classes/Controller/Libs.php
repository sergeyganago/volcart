<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Libs extends Controller {

public function action_index(){
}

public function action_ckupload(){
$this->auth=Auth::instance();
$this->user=$this->auth->get_user();
$callback=$_GET['CKEditorFuncNum'];
$filename=date('y-m-d-h-i').$_FILES['upload']['name'];
$file_new_name=$_SERVER['DOCUMENT_ROOT'].Kohana::$base_url."media/uploads/".$this->user->id."/";
$file_name_tmp=$_FILES['upload']['tmp_name'];

if(!is_dir($file_new_name)){
@mkdir($file_new_name,0777);
}
$full_path=$file_new_name.$filename;
$http_path='/mitskevich/media/uploads/'.$this->user->id.'/'.$filename;
$error='';

if(move_uploaded_file($file_name_tmp,$full_path)){
$error='Файл не загружен234';
}else{
$error='Файл не загружен';
$http_path='';
}
echo "<script>window.parent.CKEDITOR.tools.callFunction(".$callback.", \"".$http_path."\", \"".$error."\");</script>";



}


}