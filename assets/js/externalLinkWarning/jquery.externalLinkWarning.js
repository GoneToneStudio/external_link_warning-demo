/*
 * 旋風之音 GoneTone
 * https://blog.reh.tw/
 *
 * 範例教學
 * https://blog.reh.tw/archives/805/
 */
;(function($) {
    $.fn.externalLinkWarning = function() {
        $("content a").on("click", function(e) {
            var url = $(this).attr("href");

            if (url != null && url.indexOf("http") == 0) {
                //var externalLink = (this.hostname.indexOf("example.com") == -1);
                var externalLink = (this.hostname !== top.location.hostname);
                if (externalLink) {
                    window.open(top.location.protocol + "//" + top.location.host + "/goto.php?url=" + encodeURIComponent(url), "_blank");
                    return false;
                }

                return true;
            }

            return true;
        });
    };
})(jQuery);
