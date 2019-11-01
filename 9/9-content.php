<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-9">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="khung">
                    <img src="images/1.png" alt="">
                    <div class="ndung">
                    <h3>Nothing Beats New York</h3>
                    <h5>January 23, 2018</h5>            
                    <p>Etiam placerat velit vitae dui blandit sollicitudin. Vestibulum tincidunt sed dolor sit amet volutpat. Nullam egestas sem at mollis sodales. Nunc eget lacinia eros,…</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="khung3">
                    <img src="images/2.png" alt="">
                    <div class="ndung">
                    <h3>Modest Dressing, as a Virtue</h3>
                    <h5>January 22, 2018</h5>            
                    <p>Etiam placerat velit vitae dui blandit sollicitudin. Vestibulum tincidunt sed dolor sit amet volutpat. Nullam egestas sem at mollis sodales. Nunc eget lacinia eros,…</p>
                    </div>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="khung1">
                    <img src="images/3.png" alt="">
                    <div class="ndung">
                    <h3>How to Use a Personal Assistant</h3>
                    <h5>January 18, 2018</h5>            
                    <p>Etiam placerat velit vitae dui blandit sollicitudin. Vestibulum tincidunt sed dolor sit amet volutpat. Nullam egestas sem at mollis sodales. Nunc eget lacinia eros,…</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="khung1">
                        <img src="images/4.png" alt="">
                    <div class="ndung">
                    <h3>How to Function at Work Without Sleep</h3>
                    <h5>January 15, 2018</h5>            
                    <p>Etiam placerat velit vitae dui blandit sollicitudin. Vestibulum tincidunt sed dolor sit amet volutpat. Nullam egestas sem at mollis sodales. Nunc eget lacinia eros,…</p>
                    </div>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="khung1">
                        <img src="images/5.png" alt="">
                    <div class="ndung">
                    <h3>How to Delegate to Subordinates</h3>
                    <h5>January 8, 2018</h5>            
                    <p>Etiam placerat velit vitae dui blandit sollicitudin. Vestibulum tincidunt sed dolor sit amet volutpat. Nullam egestas sem at mollis sodales. Nunc eget lacinia eros,…</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="khung1">
                        <img src="images/6.png" alt="">
                    <div class="ndung">
                    <h3>How to Ace Your Online Job Interview</h3>
                    <h5>January 7, 2018</h5>            
                    <p>Etiam placerat velit vitae dui blandit sollicitudin. Vestibulum tincidunt sed dolor sit amet volutpat. Nullam egestas sem at mollis sodales. Nunc eget lacinia eros,…</p>
                    </div>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="khung1">
                        <img src="images/7.png" alt="">
                    <div class="ndung">
                    <h3>How to End Your Emails</h3>
                    <h5>January 6, 2018</h5>            
                    <p>Etiam placerat velit vitae dui blandit sollicitudin. Vestibulum tincidunt sed dolor sit amet volutpat. Nullam egestas sem at mollis sodales. Nunc eget lacinia eros,…</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="khung2">
                        <img src="images/8.png" alt="">
                    <div class="ndung">
                    <h3>How to Keep Track of Work To-Dos</h3>
                    <h5>January 5, 2018</h5>            
                    <p>Etiam placerat velit vitae dui blandit sollicitudin. Vestibulum tincidunt sed dolor sit amet volutpat. Nullam egestas sem at mollis sodales. Nunc eget lacinia eros,…</p>
                    </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="item-list">
                        <ul class="pagination">
                            <li class="mot"><a href="#">1</a></li>
                            <li class="mot"><a title="Go to page 2" href="#">2</a></li>
                            <li class="mot"><a title="Go to next page" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div> 
        </div>
    </div>
</div>
