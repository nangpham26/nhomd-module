<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">
    <div class="container">
        <div class="header-content">
            <h2>BEST SELLING PRODUCTS</h2>
            <p>Lorem ipsum dolor sit amet, consect etur elit, nullam imperdiet in mauris ut.<br>
                Nam venenatis eleme ntum est, nec neque.</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-xs-6 col-sm-6" >
                <div class="product">
                    <a href="#" class="img-product"><img src="./images/module-3-1.jpg" alt="" class="img-responsive"></a>
                    <a href="#" class="button-product">Add to cart</a>
                    <a href="#" class="product-title">
                        <h2>White Summer Dress</h2>
                    </a>
                    <span>$80.00</span>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 col-sm-6">
                <div class="product">
                    <a href="#" class="img-product"><img src="./images/module-3-2.jpg" alt="" class="img-responsive"></a>
                    <a href="#" class="button-product">Add to cart</a>
                    <a href="#" class="product-title">
                        <h2>White Summer Dress</h2>
                    </a>
                    <span>$80.00</span>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 col-sm-6">
                <div class="product">
                    <a href="#" class="img-product"><img src="./images/module-3-3.jpg" alt="" class="img-responsive"></a>
                    <a href="#" class="button-product">Add to cart</a>
                    <a href="#" class="product-title">
                        <h2>White Summer Dress</h2>
                    </a>
                    <span>$80.00</span>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 col-sm-6">
                <div class="product">
                    <a href="#" class="img-product"><img src="./images/module-3-4.jpg" alt="" class="img-responsive"></a>
                    <a href="#" class="button-product">Add to cart</a>
                    <a href="#" class="product-title">
                        <h2>White Summer Dress</h2>
                    </a>
                    <span>$80.00</span>
                </div>
            </div>
        </div>
        <div class="button-bot">
            <a href="#" class="button-bottom">VIEW ALL PRODUCTS</a>
        </div>
        <hr class="separator">
    </div>
</div>