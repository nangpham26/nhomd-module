<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-16">
    <div class="container">
        <div class="home-inner">
            <a href="#" class="share-link twitter">
                <span>Share on Twitter</span>
                <img src="./images/twitter.svg" alt="logo">
            </a>
            <a href="#" class="share-link facebook">
                <span>Share on Facebook</span>
                <img src="./images/facebook.svg" alt="logo">
            </a>
            <a href="#" class="share-link linkedin">
                <span>Share on Twitter</span>
                <img src="./images/linkedin.svg" alt="logo">
            </a>
            <a href="#" class="share-link pinterest">
                <span>Share on Twitter</span>
                <img src="./images/pinterest.svg" alt="logo">
            </a>
        </div>
        <footer class="footer">
            <span class="cat-links">
                <a href="#" rel="category tag">Food</a>
                <a href="#" rel="category tag">Stress</a>
                <a href="#" rel="category tag">Time Management</a>
                <a href="#" rel="category tag">Work</a>
            </span>
        </footer>
        <hr class="separator">
        <div class="about">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2  img-about">
                    <img src="./images/avatar.png" alt=""> 
                </div>
                <div class="col-md-10 col-sm-10 col-xs-10 about-content">
                    <h3>About the author</h3>
                    <p>Lorem ipsum dolor sit amet, con sect etur adi pis cing elit. Morbi eget condimentum turpis. Etiam ligula orci, laoreet sit amet mollis eget, finibus vel lectus. Nunc sit amet euismod odio, nec dictum dui.</p>
                </div>
            </div>
        </div>
        <hr class="separator">
    </div>
</div>