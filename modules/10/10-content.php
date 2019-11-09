<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="type-10">
        <div class="container">
            <h4 class="widget-title">Popular Blog Posts</h4>
            <div class="row fix-row">
                <div class="col-md-3 fix-size col-xs-3 col-sm-3">
                    <img src="../10/images/10-1.png" alt="hinh" class="img-responsive">
                </div>
                <div class="col-md-9 fix-size1 col-xs-9 col-sm-9">
                <span class="sub-title">How to Function at Work Withou…</span>
                <div class="des">
                Etiam placerat velit vitae dui blandit sollicitudin. Vestibulum
                </div>
                </div>
                
            </div>
            <div class="row fix-row">
                <div class="col-md-3 fix-size col-xs-3">
                    <img src="../10/images/10-2.png" alt="hinh" class="img-responsive">
                </div>
                <div class="col-md-9 fix-size1 col-xs-9">
                <span class="sub-title">How to End Your Emails</span>
                <div class="des">
                Quis vulputate justo euismod ac. Nunc viverra sollicitudin
                </div>
                </div>
                
            </div>
            <div class="row fix-row">
                <div class="col-md-3 fix-size col-xs-3">
                    <img src="../10/images/10-3.png" alt="hinh" class="img-responsive">
                </div>
                <div class="col-md-9 fix-size1 col-xs-9">
                <span class="sub-title">What to Wear to a Business Par…</span>
                <div class="des">
                enim id volutpat interdum etiam placerat velit vitae dui blandit
                </div>
                </div>
                
            </div>
            <div class="row fix-row">
                <div class="col-md-3 fix-size col-xs-3">
                    <img src="../10/images/10-4.png" alt="hinh" class="img-responsive" >
                </div>
                <div class="col-md-9 fix-size1 col-xs-9">
                <span class="sub-title">Protect Your Skin Against Wint…</span>
                <div class="des">
                Vulputate justo euismod ac etiam placerat velit vitae dui
                </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
