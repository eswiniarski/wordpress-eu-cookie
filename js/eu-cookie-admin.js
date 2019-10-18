var euCookieBarAdmin = function () {
    var selectElement, selectedAnimationType;

    function init() {
        selectElement = document.getElementById("animationType");
        selectedAnimationType = document.querySelector('[name=eu_cookie_animation_type]');

        selectElement.addEventListener("change", function (event) {
            selectedAnimationType.value = event.target.value;
        });

        if (selectedAnimationType != null) {
            if (selectedAnimationType.value != "") {
                selectElement.value = selectedAnimationType.value;
            }
        }
    }

    return {
        init: init,
    }
}();

document.addEventListener("DOMContentLoaded", function () {
    euCookieBarAdmin.init();
});