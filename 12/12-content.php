<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-139">
    <div class="container">
        <div class="wrap">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Description</a></li>
                <li><a data-toggle="tab" href="#menu1">Additional information</a></li>
                
            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h4>Description</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dolor metus, molestie in enim vitae, pretium pellentesque velit. Nunc dolor leo, blandit et sapien sit amet, imperdiet ornare tortor.</p>
                    <p>Aenean at mattis arcu. Nunc congue vitae ligula eu egestas. Quisque porttitor lorem a ligula eleifend laoreet. In consectetur congue fringilla. Phasellus a magna ultrices, accumsan leo quis, consectetur lorem.</p>
                    <p>Curabitur turpis ante, pulvinar quis massa id, posuere malesuada quam. Duis interdum dolor in libero tincidunt viverra. Praesent aliquam convallis lacus non volutpat. Praesent ac odio sed mi dapibus vestibulum ultricies vel dui. Fusce non pellentesque libero.</p>
                    <div class="home-inner">
                        <a href="#" class="share-link twitter">
                        <span>Share on Twitter</span>
                            <img src="./images/gutenshop-icon-twitter.svg" alt="logo">
                        </a>
                        <a href="#" class="share-link facebook">
                        <span>Share on Facebook</span>
                            <img src="./images/gutenshop-icon-facebook.svg" alt="logo">
                        </a>
                        <a href="#" class="share-link linkedin">
                        <span>Share on Twitter</span>
                            <img src="./images/gutenshop-icon-linkedin.svg" alt="logo">
                        </a>
                        <a href="#" class="share-link pinterest">
                        <span>Share on Twitter</span>
                            <img src="./images/gutenshop-icon-pinterest.svg" alt="logo">
                        </a>
                    </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h4>Additional information</h4>
                    <table class="shop-attributes">
                        <tbody>
                            <tr>
                                <th>Weight</th>
                                <td>5 kg</td>
                            </tr>
                            <tr>
                                <th>Dimensions</th>
                                <td>50 x 100 x 70cm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>