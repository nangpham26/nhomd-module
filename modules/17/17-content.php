<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-17">
    <div class="container">
        <div class="row">
        	<div class="full-post">
	            <div class="post-images">
	            	<img src="images/post-1.png">
	            </div>
	            <div class="page">
	            	<div class="header">
	            		<h1 class="entry-title">Nothing Beats New York</h1>
	            	</div>
	            	<div class="line">
	            		<span class="byline">
	            			by
	            			<span>
	            				<a href="" class="author">nangpham</a>
	            			</span>
	            		</span>
	            		<span> | </span>
	            		<span class="posted">Posted on October 28, 2019</span>
	            	</div>
	            </div>
	            <div class="entry-content">
	            	<p>Etiam placerat velit vitae dui blandit sollicitudin. Vestibulum tincidunt sed dolor sit amet volutpat. Nullam egestas sem at mollis sodales. Nunc eget lacinia eros, ut tincidunt nunc. Quisque volutpat, enim id volutpat interdum, purus odio euismod neque, sit amet faucibus justo dolor tincidunt dui. Nulla facilisi. Phasellus in tincidunt lacus, in gravida ipsum. Cras id vehicula est, tincidunt pellentesque magna. Etiam porttitor nulla urna, quis vulputate justo euismod ac. Nunc viverra sollicitudin fringilla. <br> <br> 
	            	Ut a tortor quis nunc mattis placerat vitae sed sapien. Duis vitae enim ac turpis viverra ullamcorper et vitae odio. Pellentesque arcu tortor, aliquam vel semper at, ullamcorper et odio. Nullam aliquet rhoncus quam non iaculis. Pellentesque id enim et nisl ultricies vulputate in a magna. Ut lectus eros, imperdiet at ultricies interdum, ornare sit amet massa. Suspendisse tempus neque ut congue aliquam.</p>
	            	<p>
	            		<img class="img" src="images/img-1.png">
	            	</p>
	            	<p>Maecenas felis lacus, mollis eu tellus vitae, tincidunt sodales elit. Fusce placerat ante eget sapien egestas, eu eleifend turpis aliquet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut id quam sed mauris bibendum convallis. Maecenas erat dui, ultricies id sem quis, maximus accumsan enim. Pellentesque porta, purus sit amet imperdiet blandit, quam eros porta orci, eu placerat quam libero a tortor. Cras convallis tellus id sapien congue sollicitudin. Aenean vehicula lacus vel ligula aliquam, sit amet auctor felis pharetra. Maecenas id nisi velit. Pellentesque mattis ligula leo, id bibendum ligula mollis at. Donec ornare hendrerit est at finibus. Phasellus in ante id nulla pharetra ullamcorper.</p> 
	            	<b>Aenean finibus, ligula quis mollis fermentum, ligula ligula volutpat velit, nec dictum magna mauris vitae dolorul tricies dui magna sit amet sem, placerat aliquam vel semper at, ullamcorper.</b> 
	            	<br> <br>
	            	<p>Aliquam malesuada lectus mauris, sed pellentesque odio mattis eget. Praesent orci elit, convallis ac risus sed, auctor consectetur magna. Nunc ac magna eget erat eleifend finibus cursus eget orci. Pellentesque pharetra convallis fermentum. Aliquam at ante vitae tellus tempor rhoncus. Suspendisse imperdiet, mauris vitae suscipit egestas, ex sem consectetur mauris, vitae ultricies dui magna sit amet sem. Nunc tristique mollis interdum. Morbi non fringilla sapien, non laoreet nibh. Quisque sodales libero turpis, id ultricies elit tempus sed. Maecenas tincidunt enim eget cursus ultrices. Suspendisse sit amet eleifend tortor.</p>
	            </div>
	        </div>
	    </div>
    </div>
</div>

    