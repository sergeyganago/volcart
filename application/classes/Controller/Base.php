<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {
    
    public $template = 'v_base';
    
	public function before()
	{   
        parent::before();
        
        $config = Kohana::$config->load('conf');
        $site_data = $config->get('site');
        
        //echo Debug::vars($site_data);
        
        $this->template->title=$site_data['title'];
        $this->template->keywords=$site_data['keywords'];
        $this->template->description=$site_data['description'];
        $this->template->name = 'Имя сайта';
        $this->template->styles = array(
        'media/css/style.css',
        'media/css/inner.css',
        'media/css/layout.css',
        'media/css/layerslider.css',
        'media/css/color.css',
        'media/css/flexslider.css',
        'media/css/prettyPhoto.css',
        
        );

        $this->template->scripts = array(
        'media/js/jquery-1.7.1.min.js',
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
        
        $widget = Request::factory('widgets/menu')->execute();
        $this->template->block_top=array($widget);
        
        $navigation = Request::factory('widgets/navigation')->execute();
        $this->template->block_nav=array($navigation);
        
        $slider = Request::factory('widgets/slider')->execute();
        $this->template->block_slider=array($slider);
				
				$bottommenu=ORM::factory('maintext')->where('showhide','=','show')->find_all();
				$this->template->bottommenu=$bottommenu;
	}
    
    public function action_index(){
    //echo "Главная страница";
    //$content = View::factory('templates/v_index', array('title'=>'Заголовок сайта 666'));
    $title = 'Заголовок сайта 777';
    $content = View::factory('templates/v_index')->bind('title', $title);
    $this->template->block_center[] = $content;
    }
} // End Welcome
