<section id="navigation">
    <div class="container">
    <div class="row">
    <nav id="nav-wrap" class="twelve columns">
        <ul id="sf-nav" class="sf-menu">
            <li class="current"><?=HTML::anchor('/','Главная')?></li>
            <li><?=HTML::anchor('about','О компании')?>
                <ul>
                    <li><a href="element.html">Elements</a></li>
                    <li><a href="single.html">Blog Detail</a></li>
                    <li><a href="#">Dropdown</a>
                        <ul>
                            <li><a href="#">Only</a></li>
                            <li><a href="#">Example of</a></li>
                            <li><a href="#">The Dropdown</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="product-grid.html">Products</a>
                <ul>
               	    <li><a href="product-grid.html">Product Grid</a></li>
                    <li><a href="product-list.html">Product List</a></li>
                    <li><a href="product-details.html">Product Details</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                </ul>
            </li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><?=HTML::anchor('news','Новости')?></li>
            <li><?=HTML::anchor('contact','Контакты')?></li>
        </ul><!-- topnav -->
    </nav><!-- nav -->	
    </div>
    </div>
</section>