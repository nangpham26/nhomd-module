<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="khung">
                <img src="images/1.png" alt="" style="width: 35%;">
                <h3>FREE SHIPPING</h3>
                <div class="chu">Sed ut unde omnis iste natus fringilla tempor dignissim at, pretium et arcu. Sed ut unde omnis iste tempor dignissim at.</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="khung">
                <img src="images/2.png" alt="" style="width: 35%;">
                <h3>24/7 CUSTOMER SERVICE</h3>
                    <div class="chu">Sed ut unde omnis iste natus fringilla tempor dignissim at, pretium et arcu. Sed ut unde omnis iste tempor dignissim at.</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="khung">
                <img src="images/3.png" alt="" style="width: 35%;">
                <h3>NO HIDDEN FEES</h3>
                <div class="chu">Sed ut unde omnis iste natus fringilla tempor dignissim at, pretium et arcu. Sed ut unde omnis iste tempor dignissim at.</div>
                </div>
            </div>
        </div> 
    </div>
</div>
