<div class="breadcrumb"><a href="index.html">Главная</a> / Новости</div>
    <h1 class="pagetitle">Новости</h1>
        <? foreach($news as $new): ?>                        
        <article class="post">
       	    <div class=" row">
                <div class="postimg five columns">
                    <?=HTML::image($new->image,array('alt'=>''))?>
                </div>
                <div class="seven columns">
                    <div class="entry-content">
                                                
                        <div class="entry-utility">
                            February 01, 2013 / <a href="#">Articles</a> / <a href="#">0 Comment</a>
                        </div>
                        <h2 class="posttitle"><?=HTML::anchor('news/'.$new->id.'/', $new->name);?></h2>
                                                
                        <p><?=$new->text?></p>
                                                
                        <?=HTML::anchor('news/'.$new->id.'/', 'Подробнее');?>
                    </div>
                </div>
            </div>    
            <div class="clear"></div>
        </article>
        <? endforeach;?>
