<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-15">
    <div class="container">
        <div class="title"><h3>Related Posts</h3></div>
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-3 blog-1">
                <div class="post-blog">
                    <a href="">
                        <img src="images/post-1.png">
                    </a>
                    <div class="content">
                        <h4 class="entry-title">
                            <a href="" >Nothing Beat New York</a> 
                        </h4>
                        <div class="entry-day">
                            November 3, 2019
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-md-3 col-sm-12 col-xs-3 blog-2">
                <div class="post-blog">
                    <a href="">
                        <img src="images/post-2.png">
                    </a>
                    <div class="content">
                        <h4 class="entry-title">
                            <a href="">Writing Memoir</a>
                        </h4>
                        <div class="entry-day">
                            November 3, 2019
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-md-3 col-sm-12 col-xs-3 blog-3">
                <div class="post-blog">
                    <a href="">
                        <img src="images/post-3.png">
                    </a>
                    <div class="content">
                        <h4 class="entry-title">
                            <a href="">What is New York ?</a>
                        </h4>
                        <div class="entry-day">
                            November 3, 2019
                        </div>
                    </div>
                </div>    
            </div>
        </div>

    </div>
</div>

    