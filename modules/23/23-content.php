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
        				My account
        			</h1>
        			<div class="line"></div>
        		</div>
        		<div class="entry-login">
        			<h2>Login</h2>
        			<form role="form">
					  	<div class="form-group">
						    <label for="exampleInputEmail1">Username Or Email address
                                <span class="required">*</span>
                            </label>
						    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email or Username">
					  	</div>
					  	<div class="form-group">
						    <label for="exampleInputPassword1">Password
                                <span class="required">*</span>
                            </label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  	</div>
                        <button type="submit" class="button">Log in</button>
                        <div class="checkbox">
                            <label>
                              <input type="checkbox"> Remember me</input>
                            </label>
                        </div>
                        <p class="lost-pass">
                            <a href="">Lost your password</a>
                        </p>
					</form>
				</div>
        	</div>
        </div>
    </div>
</div>

    