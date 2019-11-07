<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-module1">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display --> 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Logo" class="img-responsive"></a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Closthing</a></li>
                            <li><a href="#">Dressess</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Shirts</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Check out</a></li>
                            <li><a href="#">Card</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="cart-header">
                            <a class="cart-customlocation" href="#">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="cart-icon-number">4</span>
                            </a>
                        </div>
                    </li>
                 </ul>
            </div><!-- /.navbar-collapse -->
            <div class="cart-header">
                <div class="cart-preview">
                    <div class="cart-review-tem">
                        <div class="thum-tem">
                            <img src="images/1.jpg" alt="item cart" class="img-responsive">
                            2 x White Summer Dress
                            <span>$80</span>
                        </div>
                    </div>
                    <div class="cart-review-tem">
                        <div class="thum-tem">
                            <img src="images/2.jpg" alt="item cart" class="img-responsive">
                            2 x White Summer Dress
                            <span>$80</span>
                        </div>
                    </div>
                    <div class="cart-review-tem">
                        <div class="thum-tem">
                            <img src="images/3.jpg" alt="item cart" class="img-responsive">
                            2 x White Summer Dress
                            <span>$80</span>
                        </div>
                    </div>
                    <div class="cart-review-tem">
                        <div class="thum-tem">
                            <img src="images/1.jpg" alt="item cart" class="img-responsive">
                            2 x White Summer Dress
                            <span>$80</span>
                        </div>
                    </div>
                </div>
            </div>
    </nav>  
</div>
