<?php
$url = $_GET["url"];

if ($url == Null) {
    //header('Location: /');
    echo '<h1>$_GET["url"] is null.</h1>';
    exit;
}
?>
<!--
    旋風之音 GoneTone
    https://blog.reh.tw/

    範例教學
    https://blog.reh.tw/archives/805/
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>您即將前往第三方網頁 | 【jQuery】外部連結警告 Demo</title>
    </head>
    <body>
        <h1><font color="#ff0000">警告</font></h1>
        <p>您即將前往第三方網頁 (<a href="<?php echo $url; ?>">點此前往</a>)</p>
    </body>
</html>
