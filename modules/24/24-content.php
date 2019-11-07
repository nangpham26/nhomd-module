<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-23">
    <div class="container">
        <div class="row">
        	<div class="login">
        		<div class="title">
        			<h1 class="entry-title">
        				Lost password
        			</h1>
        			<div class="line"></div>
        		</div>
        		<div class="entry-login">
        			<p>Lost your password? Please enter your username or email address. You <br> will receive a link to create a new password via email.</p>
        			<form role="form">
					  	<div class="form-group">
						    <label for="exampleInputEmail1">Username Or Email
                            </label>
						    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email or Username">
					  	</div>
                        <button type="submit" class="button">Reset password</button>
					</form>
				</div>
        	</div>
        </div>
    </div>
</div>

    