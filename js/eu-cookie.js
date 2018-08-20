jQuery(function ($) {
    var euCookie = {
        init() {
            if (localStorage.euCookie != 1) {
                $(".cookie-msg").addClass('show');
            }

            $(".cookie-msg .cookie-close").click(function() {
                euCookie.close();
            });
        },

        close() {
            $(".cookie-msg").removeClass('show');
            localStorage.euCookie = 1;
        },
    };

    euCookie.init();
});
