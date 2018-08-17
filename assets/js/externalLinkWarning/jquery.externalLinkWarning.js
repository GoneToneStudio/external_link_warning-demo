/*
 * 旋風之音 GoneTone
 * https://blog.reh.tw/
 *
 * 範例教學
 * https://blog.reh.tw/archives/805/
 */
;(function($) {
    $.fn.externalLinkWarning = function() {
        $("content a").on("click", function(e) { //當 content a 被點擊時
            var url = $(this).attr("href"); //取得 href 內容

            if (url != null && url.indexOf("http") == 0) { //判斷 href url 是否為空和開頭是否為 http
                //var externalLink = (this.hostname.indexOf("example.com") == -1); //href 網址網域沒有 example.com
                var externalLink = (this.hostname !== top.location.hostname); //href 網址網域不等於頁面網域
                if (externalLink) {
                    //開啟外部連結警告頁面
                    window.open(top.location.protocol + "//" + top.location.host + "/goto.php?url=" + encodeURIComponent(url), "_blank");
                    return false;
                }

                return true;
            }

            return true;
        });
    };
})(jQuery);
