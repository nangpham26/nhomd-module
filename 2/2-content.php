<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2">
    <div class="header container-fluid">
        <div class="header-slideshow swiper-container">
            <div class="slideshow swiper-wrapper">
                <div class="swiper-slide" id="slide-1">
                    <div class="slider-content">
                        <h3>SPRING &amp; SUMMER<br>COLLECTION 2019</h3>
                        <p></p>
                        <a href="#" class="button-content">VISIT OUR SHOP</a>
                    </div>

                </div>
                <div class="swiper-slide" id="slide-2">
                    <div class="slider-content">
                        <h3>NEW SUMMER<br>NEW TRENDS</h3>
                        <p></p>
                        <a href="#" class="button-content">VISIT OUR BLOG</a>
                    </div>
                </div>
                <div class="swiper-slide" id="slide-3">
                    <div class="slider-content">
                        <h3>SUMMER SALE<br>UP TO 50%</h3>
                        <p></p>
                        <a href="#" class="button-content">VIEW ALL DISCOUNTS</a>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>