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
        <title>【jQuery】外部連結警告 Demo</title>
    </head>
    <body>
        <h1>【jQuery】外部連結警告 Demo</h1>
        <h2>教學文章：<a href="https://blog.reh.tw/archives/805" target="_blank">https://blog.reh.tw/archives/805</a></h2>
        <hr>
        <h4><font color="#ff0000">本範例假設 example.com 為網站網域</font></h4>
        <hr><br>
        <a href="https://www.facebook.com/TPGoneTone/" target="_blank">不判斷外部連結的外部連結</a>
        <br><br>
        包在 <font color="#ff0000">&lt;content&gt;&lt;/content&gt;</font> 內的連結 Demo
        <br>
        <content>
            <a href="https://www.facebook.com/TPGoneTone/">外部連結</a> | <a href="https://example.com/test.php">內部連結</a> | <a href="test.php">內部連結 (相對路徑)</a> | <a href="">空連結</a> | <a href="javascript:;" onclick="alert('測試');">JavaScript onclick</a>
        </content>
        <script type="text/javascript" src="assets/vendors/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/externalLinkWarning/jquery.externalLinkWarning.js"></script>
        <script type="text/javascript">
            /* External Link Warning */
            $(document).externalLinkWarning();
        </script>
    </body>
</html>
