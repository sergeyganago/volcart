


<div class="breadcrumb"><a href="index.html">Главная</a> / Новости / <?=$news->name?></div>
                                <h1 class="pagetitle">Новости</h1>
                                
                                <article class="post">

                                        <div class="postimg five columns">
                                            <?=HTML::image($news->image,array('alt'=>''))?>
                                        </div>

                                        <div class="entry-content">
                                            
                                            <div class="entry-utility">
                                                February 01, 2013 / <a href="#">Articles</a> / <a href="#">0 Comment</a>
                                            </div>
                                            <h2 class="posttitle"><?=$news->name?></h2>
                                            
                                            <p><?=$news->text?></p>

                                        </div>

            
                                    <div class="clear"></div>
                                </article>
                                
                                
                                
                                <section id="comment">
                                    <h3>Комментарии</h3>
                                    <ol class="commentlist">
                                        <? foreach($news->comments->find_all() as $one): ?>
                                        <li>
                                            <div class="comment-body">
                                                <div class="avatar-img"><img src="images/content/avatar.gif" alt="" class="avatar frame"/></div>
                                                <cite class="fn">Richard Delano</cite>
                                                <div class="dr">
                                                    <span class="tdate">August 17, 2010 &nbsp;/&nbsp; 7:15 am</span> &nbsp;-&nbsp; <span class="reply"><a href="#" class="more">Reply</a></span>
                                                </div>
                                                <div class="commenttext">
                                                    <p><?=$one->text?></p>
                                                    <?=HTML::anchor('answer/index/'.$one->id.'/', 'ответить');?>
                                                </div>
                                            </div>
                                        </li>
                                        <? endforeach;?>
                                    </ol>