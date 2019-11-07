<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-14">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <h4 class="widget-title">Looking for something?</h4>
            <section class="search-form">
                <form method="get" class="product-search" action="#">
                    <input type="search"  class="search-field" placeholder="Search…" value="" name="s">
                    <button type="submit" value="Search">Search</button>
                    <input type="hidden" name="post_type" value="product">
                </form>
            </section>
            <section class="forlow-title">
                <h4 class="widget-title">Follow us on Social Media</h4>
                <a href="#"><img src="images/twitter.png" alt="" class="imgresponsive"></a>
                <a href="#"><img src="images/facebook.png" alt="" class="imgresponsive"></a>
                <a href="#"><img src="images/instagram.png" alt="" class="imgresponsive"></a>
                <a href="#"><img src="images/youtube.png" alt="" class="imgresponsive"></a>
            </section>
            <section>
                    <h4 class="widget-title">Categories</h4>
                    <ul class="product-categories">
                        <li><a href="#">Food</a></li>
                        <li><a href="#">Stress</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Time Management</a></li>
                        <li><a href="#">Uncategorized</a></li>
                        <li><a href="#">Work</a></li>
                    </ul>
                </section>
            </div>
        </div>
    </div> 
</div>
