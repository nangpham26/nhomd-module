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
        <div class="title-shop"><h1>Shop</h1></div>
        <div class="row">
            <div class="col-md-9">
                <!-- sap xrp thu tu hien thi san pham -->
                <div class="col-md-4">
                    <div class="results-count-wrapper">
                        <p class="result-count-showing">
                            Showing 1–12 of 33 results	</p>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                        <form class="select-sort" method="get">
                            <select name="orderby" class="orderby">
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date" selected="selected">Sort by latest</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                            </select>
                                    
                            <input type="hidden" name="paged" value="1">
                        </form>
                </div>
                <div class="col-md-4">
                    <div class="hinh-sp">
                        <a href="#"><img src="images/1.jpg" alt="sp1" class="img-responsive"></a>
                    </div>
                    <h2 class="name-sp">White Summer Dress</h2></h2>
                    <div class="price">$80.000</div>
                </div>

                <div class="col-md-4">
                    <div class="hinh-sp">
                        <a href="#"><img src="images/2.jpg" alt="sp1" class="img-responsive"></a>
                    </div>
                    <h2 class="name-sp">White Summer Dress</h2></h2>
                    <div class="price">$80.000</div>
                </div>

                <div class="col-md-4">
                    <div class="hinh-sp">
                        <a href="#"><img src="images/3.jpg" alt="sp1" class="img-responsive"></a>
                    </div>
                    <h2 class="name-sp">White Summer Dress</h2></h2>
                    <div class="price">$80.000</div>
                </div>
            </div>

            <div class="col-md-3">
            </div>
        </div>

        <div class="row">
            <div class="col-md-9 pages-select">
                <nav aria-label="Page navigation">
                  <ul class="pagination">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">→</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>      
        </div>
    </div>   
</div>
