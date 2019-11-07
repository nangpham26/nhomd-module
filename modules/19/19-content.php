<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-19">
  <div class="container">
    <div class="head">
      <h3>Leave a Reply</h3>
      <p><span>Your email address will not be published. Required fields are marked *</span></p>

    </div>
    <div class="foot">
      <form>
      <label>Comment</label>
      <textarea cols="45" rows="8" maxlength="65525" required="required"></textarea>
      <div class="row">
        <div class="col-md-4 col-sm-4 name">
          <label class="labelname">Name *</label>
          <br>
          <input type="text" class="inputname" maxlength="245" required="required">
        </div>
        <div class="col-md-4 col-sm-4 name">
          <label class="labelname">Email *</label>
          <br>
          <input type="text" class="inputname" maxlength="245" required="required">
        </div>
        <div class="col-md-4 col-sm-4 name">
          <label class="labelname">Website</label>
          <input type="text" class="inputname" maxlength="245" required="required">
        </div>
      </div>
      <p>
        <input type="submit" class="submit" value="Post Comment">
      </p>
      </form>
    </div>
  </div>
</div>