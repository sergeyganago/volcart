<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Adminka_Main extends Controller_Template {
    public $template = 'adminka/v_main';
    
	public function before() 
	{
	parent::before();
    
    $this->template->styles = array(
        'media/admin/style/bootstrap.css',
        'media/admin/style/bootstrap-datetimepicker.min.css',
        'media/admin/style/bootstrap-switch.css',
        'media/admin/style/daterangepicker-bs3.css',
        'media/admin/style/font-awesome.css',
        'media/admin/style/fullcalendar.css',
        'media/admin/style/jquery.cleditor.css',
        'media/admin/style/jquery.easy-pie-chart.css',
        'media/admin/style/jquery.gritter.css',
        'media/admin/style/jquery-ui-1.9.2.custom.min.css',
        'media/admin/style/prettyPhoto.css',
        'media/admin/style/rateit.css',
        'media/admin/style/style.css',
        'media/admin/style/validationEngine.jquery.css',
        'media/admin/style/widgets.css',
        
        );

        $this->template->scripts = array(
        'media/js/jquery-1.7.1.min.js',
				'media/admin/js/jquery.MultiFile.pack.js',
				'media/admin/js/upload.js',
        'media/js/hoverIntent.js',
        'media/js/superfish.js',
        'media/js/supersubs.js',
        'media/js/jquery.elastislide.js',
        'media/js/tinynav.min.js',
        'media/js/custom.js',
        'media/js/jquery-easing-1.3.js',
        'media/js/layerslider.js',
        'media/js/jquery.isotope.min.js',
        'media/js/jquery.flexslider-min.js',
        'media/js/jquery.prettyPhoto.js',
        'media/js/contact.js',
        'media/js/fade.js',
        
        );  
        $this->template->block_center=array();
    
	if(!Auth::instance()->logged_in('admin')){
	$this->redirect('auth/auth/login');
	}
	//$this->template->styles[]='media/style_adm.css';
	//$menu=View::factory('adminka/v_adm_menu');
	//$this->template->block_top[]=$menu;
	}
	
	public function action_index()
	{   
			$content = View::factory('adminka/v_index')->bind('title', $title);
            $this->template->block_center[] = $content;
       /* $bench = Profiler::Start('index','index');
        
        $id = $this->request->param('id');
        $page = $this->request->param('page');
        $dir = $this->request->directory('dir');
		$this->response->body($id);
        $this->response->body($dir);
       
        $products = Model::factory('catalog') -> allproducts();
        echo Debug::vars($products);
        
       
        Profiler::Stop($bench);
        //echo View::factory('profiler/stats');*/
				
	}
	
	public function _upload_img($file,$ext=Null,$directory=Null){
	
	if($directory == Null){
	$directory='media/uploads';
	}
	if($ext == Null){
	$ext='jpg';
	}
	
	$symbols='0123456789abcdefg';
	$filename='';
	for($i=0;$i<10;$i++){
	$filename.= rand(1, strlen($symbols));
	}
	
	$im=Image::factory($file);
	$im->save($directory.'/'.$filename.'.'.$ext);
	
	if($im->width > 200){
	$im->resize(200);
	}
	
	$im->save($directory.'/small_'.$filename.'.'.$ext);
	
	return $filename.'.'.$ext;
	}

} // End Welcome
