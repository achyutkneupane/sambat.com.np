(function($) {
    "use strict";
    if ($(".typedText").length == 1) {
        var titlesList = $(".titles").text();
        var texts = new Typed(".typedText", {
            strings: titlesList.split(","),
            typeSpeed: 80,
            loop: true,
            backDelay: 1100,
            backSpeed: 30
        });
    }
})(jQuery);
