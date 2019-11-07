<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-18">
    <div class="container header">
        <div class="row">
            <div class="col-md-8 col-sm-7 col-xs-7"></div>
            <div class="col-md-4 col-sm-5 col-xs-5 git-right">
                <div class="secondary">
                    <div class="search-inner">
                        <div class="product_search widget">
                            <form role="search" method="get" class="form-search" action="#">
                                <input type="search" id="product-search" class="search-field" placeholder="Search products…" value="" name="s">
                                <button type="submit" value="Search">Search</button>
                                <input type="hidden" name="post_type" value="product">
                            </form>
                        </div>
                        <div class="product_categories widget">
                            <h4 class="title">Product categories</h4>
                            <ul class="categories">
                                <li class="cat-item"><a href="#">Accessories</a></li>
                                <li class="cat-item"><a href="#">Blouses</a></li>
                                <li class="cat-item"><a href="#">Clothing</a></li>
                                <li class="cat-item"><a href="#">Crop Tops</a></li>
                                <li class="cat-item"><a href="#">Dresses</a></li>
                                <li class="cat-item"><a href="#">Hats</a></li>
                                <li class="cat-item"><a href="#">Jackets</a></li>
                                <li class="cat-item"><a href="#">Shirts</a></li>
                                <li class="cat-item"><a href="#">Skirts</a></li>
                                <li class="cat-item"><a href="#">T-shirts</a></li>
                                <li class="cat-item"><a href="#">Turtleneck Shirts</a></li>
                                <li class="cat-item"><a href="#">Vintage</a></li>
                            </ul>
                        </div>
                        <div class="recently-products widget">
                            <h4 class="view-title">Recently Viewed Products</h4>
                            <ul class="product_list_widget">
                                <li>
                                    <a href="">
                                        <img width="300" height="398" src="./images/module-18-1.jpg" class="size-thumbnail" alt="">
                                        <span class="product-title">White Summer Dress</span>
                                    </a>
                                    <span class="amount"><span class="price">$</span>80.00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>