<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Contact Us</h1>
                <p>Etiam placerat velit vitae dui blandit sollicitudin. Vestibulum tincidunt sed dolor sit amet volutpat. Nullam egestas sem at mollis sodales. Nunc eget lacinia eros, ut tincidunt nunc. Quisque volutpat, enim id volutpat interdum, purus odio euismod neque, sit amet faucibus justo dolor tincidunt dui. Nulla facilisi. Phasellus in tincidunt lacus, in gravida ipsum. Cras id vehicula est, tincidunt pellentesque magna. Etiam porttitor nulla urna, quis vulputate justo euismod ac. Nunc viverra sollicitudin fringilla.</p>
                <label class="chu"> Your Name (required)</label><br>
                <input type="" class="nhap">
                <label class="chu"> Your Email (required)</label><br>
                <input type="" class="nhap">
                <label class="chu"> Subject</label><br>
                <input type="" class="nhap">
                <label class="chu"> Your Message</label><br>
                <textarea class="nhap1"></textarea>
                <div class="button">
                    <a href="" class="send">Send</a>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div> 
</div>
     