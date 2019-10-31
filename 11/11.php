
<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/11.less', 'css/11.css');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-23">
    <title>23</title>
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $url_path ?>/css/swiper.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $url_path ?>/css/11.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php include '../11/11-content.php'; ?>

  <script src="../11/js/swiper.min.js"></script>
  <script src="../11/js/jquery-2.1.4.min.js" type="text/javascript"></script>
  <script src="../11/js/11.js"></script>
</body>
</html>



