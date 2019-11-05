<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-module8">
    <div class="container">
        <section class="search-form">
            <form method="get" class="product-search" action="#">
                <input type="search"  class="search-field" placeholder="Search products…" value="" name="s">
                <button type="submit" value="Search">Search</button>
                <input type="hidden" name="post_type" value="product">
            </form>
        </section>
       <section>
            <h4 class="widget-title">Product categories</h4>
            <ul class="product-categories">
                <li class="cat-item cat-item-29"><a href="#">Accessories</a></li>
                <li class="cat-item cat-item-23"><a href="#">Clothing</a></li>
                <li class="cat-item cat-item-34"><a href="#">Crop Tops</a></li>
                <li class="cat-item cat-item-28"><a href="#">Dresses</a></li>
                <li class="cat-item cat-item-32"><a href="#">Hats</a></li>
                <li class="cat-item cat-item-35"><a href="#">Jackets</a></li>
                <li class="cat-item cat-item-31"><a href="#">Shirts</a></li>
                <li class="cat-item cat-item-37"><a href="#">Skirts</a></li>
                <li class="cat-item cat-item-27"><a href="#">T-shirts</a></li>
                <li class="cat-item cat-item-33"><a href="#">Turtleneck Shirts</a></li>
                <li class="cat-item cat-item-36"><a href="#">Vintage</a></li>
            </ul>
        </section>
    </div>   
</div>
