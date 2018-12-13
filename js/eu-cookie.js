var euCookieBar = function () {
    var msg = undefined;

    function init() {
        this.msg = document.getElementById('euCookieBar');

        if (localStorage.euCookieBar != 1) {
            this.show();
        }

        this.msg.querySelector('.cookie-close').addEventListener('click', function() {
            euCookieBar.hide();
        });
    }

    function show() {
        this.msg.classList.add('show');
    }

    function hide() {
        localStorage.euCookieBar = 1;
        this.msg.classList.remove('show');
    }

    return {
        init: init,
        show: show,
        hide: hide
    }
}();

document.addEventListener("DOMContentLoaded", function() {
    euCookieBar.init();
});