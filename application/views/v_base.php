<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8" />
	<title><?=$title?></title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="<?=$keywords?>" />
    <meta name="description" content="<?=$description?>" />
	<meta name="author" content="" />

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    

	<!-- CSS
  ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700,500,300,400italic,300italic' rel='stylesheet' type='text/css'>  
  	<? foreach($styles as $one):?>
    <?=HTML::style($one);?>
    <? endforeach;?>
    

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ////////////////////////////////// -->
    <!-- //      Javascript Files        // -->
    <!-- ////////////////////////////////// -->
    
    <? foreach($scripts as $one):?>
    <?=HTML::script($one);?>
    <? endforeach;?>
    
    
    
    <script type="text/javascript">
    	jQuery('#carousel').elastislide({
    		imageW 	: 135,
    		margin      : 12
    	});
    </script>
    
    <script type="text/javascript">
    jQuery(window).load(function() {
        jQuery('#layerslider.slideritems').layerSlider({
    		skinsPath : 'images/layerslider-skins/',
    		skin : 'lastore',
    		autoStart : true
    	});
    	jQuery('.ls-nav-prev').fadeOut();
    	jQuery('.ls-nav-next').fadeOut();
    	jQuery('#layerslider.slideritems').mouseleave(function(){
    		jQuery('.ls-nav-prev').fadeOut();
    		jQuery('.ls-nav-next').fadeOut();
    	});
    	jQuery('#layerslider.slideritems').mouseenter(function(){
    		jQuery('.ls-nav-prev').fadeIn();
    		jQuery('.ls-nav-next').fadeIn();
    	});
    });
    </script>

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico" />
    
    

    
    
</head>


<body>

<div id="bodychild">
	<div id="outercontainer">
    
        <!-- HEADER -->
        <div id="outerheader">
        	
            
            <header>
            	<? if(isset($block_top)):?>
                    <? foreach($block_top as $one): ?>
                        <?=$one?>
                    <? endforeach?>
                <? endif?>
                
                <div id="logo-wrapper">
                    <div class="container">
                    <div class="row">
                        <div id="logo" class="six columns">
                            <?=HTML::anchor('/', HTML::image('media/images/logo.png', array('alt'=>'')));?>
                            
                            <span class="desc">Best Solution for your business</span>
                        </div>
                        <div class="right six columns">

                            <form action="#" id="searchform" method="get">
                                
                                <input type="text" onblur="if (this.value == '')this.value = 'Search keywords here';" onfocus="if (this.value == 'Search keywords here')this.value = '';" value="Search keywords here" id="s" name="s" class="field">
                                <input type="submit" value="" class="searchbutton">
                               
                            </form>
                               
                            <div id="shopping-cart-wrapper">
                                <div id="shopping_cart"><?=HTML::anchor('#','Cart:(empty)',array('id'=>'shop-bag'));?><?=HTML::anchor('#','',array('class'=>'btncart'));?>
                                    <ul class="shop-box">
                                        <li>
                                            <h2>Product1</h2>
                                            <div class="price">1 x $150.00</div>
                                            <div class="clear"></div>
                                        </li>
                                        <li>
                                            <h2>Shipping</h2>
                                            <div class="price">1 x $10.00</div>
                                            <div class="clear"></div>
                                        </li>
                                        <li class="total">
                                        	<h2>Total</h2>
                                            <div class="price"> $160.00</div>
                                            <div class="clear"></div>
                                        </li>
                                        <li class="btn-wrapper">
                                            <?=HTML::anchor('#','Cart',array('class'=>'cart'));?> <?=HTML::anchor('#','Checkout',array('class'=>'checkout'));?>
                                            <div class="clear"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="clear"></div>    
                            <div class="login">добро пожаловать на сайт! <? if(!Auth::instance()->logged_in()): ?><?=HTML::anchor('auth/auth/login','<strong>вход</strong>');?> или <?=HTML::anchor('auth/auth/','<strong>регистрация</strong>');?><?else:?><?=HTML::anchor('auth/auth/logout','<strong>выход</strong>');?><?endif;?> </div>
    
                        </div>
                    </div>
                    </div>
                </div>
                <? if(isset($block_nav)):?>
                    <? foreach($block_nav as $one): ?>
                        <?=$one?>
                    <? endforeach?>
                <? endif?>
                
                
                <div class="clear"></div>
            </header>
            
			<div class="headline">
        	<div class="container">
                <div class="row">
                	<div class="twelve columns">
               			<h1> Hey there! We are La'store and We make Awesome eCommerce Themes. <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
                    </div>
                </div>
            </div>    
            </div>
            
           
        </div>
        <!-- END HEADER -->
        
        <!-- SLIDER -->
        <? if(isset($block_slider)):?>
            <? foreach($block_slider as $one): ?>
                <?=$one?>
            <? endforeach?>
        <? endif?>
        <!-- END SLIDER -->
        
        

        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div class="container">
                <div class="row">
                	<section id="maincontent" class="twelve columns">
                    
                        <section class="content">
                        	<? if(isset($block_center)):?>
                                <? foreach($block_center as $one): ?>
                                    <?=$one?>
                                <? endforeach?>
                            <? endif?>	       
                        </section>
                    
                	</section>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
        
        <!-- FOOTER -->
        <footer id="footer">
            <div id="carousel"  class="es-carousel-wrapper">
                <div class="es-carousel">
                    <ul>
                        <li><a title="Audio Jungle"  href="#"><img alt="Audio Jungle" src="images/content/audiojungle.png"></a></li>
                        <li><a title="Active Den"  href="#"><img alt="Active Den" src="images/content/activeden.png"></a></li>
                        <li><a title="Graphic River"  href="#"><img alt="Graphic River" src="images/content/graphicriver.png"></a></li>
                        <li><a title="Photo Dune"  href="#"><img alt="Photo Dune" src="images/content/photodune.png"></a></li>
                        <li><a title="Theme Forest"  href="#"><img alt="Theme Forest" src="images/content/themeforest.png"></a></li>
                        <li><a title="Video Hive"  href="#"><img alt="Video Hive" src="images/content/videohive.png"></a></li>
                        <li><a title="Audio Jungle"  href="#"><img alt="Audio Jungle" src="images/content/audiojungle.png"></a></li>
                        <li><a title="Active Den"  href="#"><img alt="Active Den" src="images/content/activeden.png"></a></li>
                        <li><a title="Graphic River"  href="#"><img alt="Graphic River" src="images/content/graphicriver.png"></a></li>
                        <li><a title="Photo Dune"  href="#"><img alt="Photo Dune" src="images/content/photodune.png"></a></li>
                        <li><a title="Theme Forest"  href="#"><img alt="Theme Forest" src="images/content/themeforest.png"></a></li>
                        <li><a title="Video Hive"  href="#"><img alt="Video Hive" src="images/content/videohive.png"></a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <!-- FOOTER SIDEBAR -->
            <div id="outerfootersidebar">
                <div class="container">
                    <div id="footersidebar" class="row"> 

                        <div id="footcol1"  class="one_fifth columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">Information</h2>
                                    <ul>
                                        <? foreach($bottommenu as $one): ?>
                                        <li><?=HTML::anchor($one->url,$one->name)?></li>
                                        <? endforeach?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="footcol2"  class="one_fifth columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">Customer Services</h2>
                                    <ul>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Site Map</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="footcol3"  class="one_fifth columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">My Account</h2>
                                    <ul>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Wish List</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="footcol4"  class="one_fifth columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">Extras</h2>
                                    <ul>
                                        <li><a href="#">Brands</a></li>
                                        <li><a href="#">Affiliates</a></li>
                                        <li><a href="#">Gift Vouchers</a></li>
                                        <li><a href="#">Specials</a></li>
                                    </ul>
                              </li>
                            </ul>
                        </div>
                        <div id="footcol5"  class="one_fifth columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">Contact Us</h2>
									<div class="textwidget">
                                        Telp: +62 500 800 123<br>
                                        Fax: +62 500 800 112<br>
                                        <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                                    </div>
                              </li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                 
                    </div>
                </div>
            </div>
            <!-- END FOOTER SIDEBAR -->
            
            <!-- COPYRIGHT -->
            <div id="outercopyright">
                <div class="container">
                    <div id="copyright">
                    	Copyright &copy;2012. All Rights Reserved. Theme design by <a href="http://templatesquare.com">TemplateSquare.com</a>
                    </div>
                    <ul class="sn">
                        <li><a href="http://twitter.com" title="Twitter"><span class="icon-img twitter"></span></a></li>
                        <li><a href="http://facebook.com" title="Facebook"><span class="icon-img facebook"></span></a></li>
                        <li><a href="https://plus.google.com" title="Google+"><span class="icon-img google"></span></a></li>
                        <li><a href="http://amazon.com" title="Amazon"><span class="icon-img amazon"></span></a></li>
                        <li><a href="http://pinterest.com" title="Pinterest"><span class="icon-img pinterest"></span></a></li>
                    </ul> 
                </div>
            </div>
            <!-- END COPYRIGHT -->
        </footer>
        <!-- END FOOTER -->
        <div class="clear"></div><!-- clear float --> 
	</div><!-- end outercontainer -->
</div><!-- end bodychild -->


	


</body>
</html>
