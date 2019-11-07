<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-23">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="swiper-container gallery-top">
					<div class="swiper-wrapper">
						<div class="swiper-slide" style="background-image:url(./images/main-img.jpg)"></div>
						<div class="swiper-slide" style="background-image:url(./images/slide-example-100x100.jpg)"></div>
						<div class="swiper-slide" style="background-image:url(./images/slide-example-100x100.jpg)"></div>
						<div class="swiper-slide" style="background-image:url(./images/slide-example-100x100.jpg)"></div>
					</div>
					
				</div>
				<div class="swiper-container gallery-thumbs">
					<div class="swiper-wrapper">
						<div class="swiper-slide" style="background-image:url(./images/main-img.jpg)"></div>
						<div class="swiper-slide" style="background-image:url(./images/slide-example-100x100.jpg)"></div>
						<div class="swiper-slide" style="background-image:url(./images/slide-example-100x100.jpg)"></div>
						<div class="swiper-slide" style="background-image:url(./images/slide-example-100x100.jpg)"></div>
					</div>
				</div>
			</div>
			<div class="col-md-8 content">
				<h2>White Summer Dress</h2>
				<div class="price"><p><span>$</span>80.00</p></div>
				<div class="description-sp">
					<p>Lorem ipsum dolor sit amet, conse ctetur adipis cing elit. Nam dolor metus, mol estie in enim vitae, pre tium pellen tesque velit. Nunc dolor leo, blandit et sapien sit amet, imper diet orn are tortor.
					Curabitur turpis ante, pulvinar quis massa id.</p>
				</div>
				<form class="cart" action="https://nille.qodeinteractive.com/product/white-pearl/" method="post" enctype="multipart/form-data">
					<a href="#" class="qodef-quantity-buttons quantity">
						<label class="screen-reader-text" for="quantity_5da66c0390cb1">White pearl quantity</label>
						<span class="qodef-quantity-minus increment">-</span>
						<input type="text" id="quantity_5da66c0390cb1" class="qodef-quantity-input input-text qty text" data-step="1" data-min="1" data-max="" name="quantity" value="1" title="Qty" size="4" inputmode="numeric">
						<span class="qodef-quantity-plus increment">+</span>
					</a>
					<button type="submit" name="add-to-cart" value="723" class="single_add_to_cart_button button alt">Add to cart</button>
				</form>
				
				<div class="info-sp">
					<p>Categories:<a href="#" class="strong">Clothing, Dresses</a></p>
					<p>Tag:<a href="#" class="strong">Shirts</a></p>
				</div>
			</div>
		</div>
	</div>
</div>