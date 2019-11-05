<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-5">
    <div class="container">
        <h2>NEW PRODUCTS</h2>
        <p class="tieude">Lorem ipsum dolor sit amet, consect etur elit, nullam imperdiet in mauris ut.<br>
        Nam venenatis eleme ntum est, nec neque.</p>
    <div class="row">
            <div class="col-md-3">
                <div class="khung">
                    <div class="hinh">
                         <a href=""><img src="images/1.jpg"></a>
                    </div>
                    <a href="" rel="nofollow" class="button">Add to cart</a>
                    <h4>Black Hat</h4>
                <p>$ 110.00</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="khung">
                <div class="hinh">
                     <a href=""><img src="images/2.jpg"></a>
                </div>
                <a href="" rel="nofollow" class="button">Add to cart</a>
                <h4>Elegant Necklace</h4>
                <p>$ 147.00</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="khung">
                 <div class="hinh">
                    <a href=""><img src="images/3.jpg"></a>
                </div>
                <a href="" rel="nofollow" class="button">Add to cart</a>
                <h4>White Blouse</h4>
                <p>$ 164.00</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="khung">
                 <div class="hinh">
                        <a href=""><img src="images/4.jpg"></a>
                </div>
                <a href="" rel="nofollow" class="button">Add to cart</a>
                <h4>Grey Scarf</h4>
                <p>$ 99.00</p>
                </div>
            </div>
            <div class="khoangcach"></div>
            <div class="col-md-3">
                <div class="khung">
                    <div class="hinh">
                         <a href=""><img src="images/5.jpg"></a>
                    </div>
                    <a href="" rel="nofollow" class="button">Add to cart</a>
                    <h4>Dotted Blouse</h4>
                <p>$ 199.00</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="khung">
                <div class="hinh">
                     <a href=""><img src="images/6.jpg"></a>
                </div>
                <a href="" rel="nofollow" class="button">Add to cart</a>
                <h4>Small Scarf</h4>
                <p>$ 49.00</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="khung">
                 <div class="hinh">
                    <a href=""><img src="images/7.jpg"></a>
                </div>
                <a href="" rel="nofollow" class="button">Add to cart</a>
                <h4>Vintage Hat</h4>
                <p>$ 159.00</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="khung">
                 <div class="hinh">
                        <a href=""><img src="images/8.jpg"></a>
                </div>
                <a href="" rel="nofollow" class="button">Add to cart</a>
                <h4>White Blouse</h4>
                <p>$ 239.00</p>
                </div>
            </div>
        </div> 
    </div>
    </div>
</div>
