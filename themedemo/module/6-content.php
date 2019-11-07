<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

    <div class="type-6">
    <div class="background-fullwidth" style="background: #181818;">
        <div class="container">
            <div class="row wrap">
                <div class="col-md-4 col-sm-4 ">
                   
                    <h4 class="title">Responsive Design</h4>
                    <div class="des">Sed ut perspiciatis unde omnis iste natus voluptatem fringilla tempor dignissim at, pretium et arcu. Sed ut perspiciatis unde omnis iste tempor dignissim at, pretium et arcu natus voluptatem fringilla.</div>
                    
                </div>
                <div class="col-md-4 col-sm-4">
                    
                    <h4 class="title">Built For Performance</h4>
                    <div class="des">Accusantium et doloremque veritatis architecto, eaque ipsa quae ab illo inventore veritatis perspiciatis. Sed ut iste natus voluptatem fringilla tempor dignissim at, pretium et arcu perspiciatis unde omnis.</div>

                </div>
                <div class="col-md-4 col-sm-4">
                    
                    <h4 class="title">SEO Optimized</h4>
                    <div class="des">Sed ut perspiciatis unde omnis iste natus voluptatem fringilla tempor dignissim at, pretium et arcu. Sed ut perspiciatis unde omnis iste tempor dignissim at, pretium et arcu natus voluptatem fringilla.</div>
                    
                </div>
            </div>
            <div class="row site-info">
                <div class="col-md-6 desfooter">
                    Copyright <a href="#">Gutenshop</a>. All rights reserved. | <span>Theme by </span> <a class="destheme" href="#">SuperbThemes</a>
                </div>
                <div class="col-md-6 footer-menu">
                    <div class="container">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog
</a></li> 
                            <li><a href="#">Regular Post
</a></li>
                            <li><a href="#">Regular Page
</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


