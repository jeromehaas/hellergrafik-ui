$(document).ready(function() {

    let privacy = (function() {

        // -------------------------
        // NAVIGATION MOBILE TOGGLE
        // -------------------------

        let privacyElements = {
            privacyBanner: $("#privacy-notification"),
            privacyButton: $(".privacy-notification__button")
        }

        function showPrivacyBanner() {
            privacyElements.privacyBanner.addClass("is-visible");
        }

        function hidePrivacyBanner() {
            privacyElements.privacyBanner.removeClass("is-visible");
        }

        function checkPrivacyCookie() {
            if ($.cookie('privacyAccepted') != 'true') {
                return true;
            }
        }

        function setPrivacyCookie() {
            $.cookie('privacyAccepted', 'true', { expires: 1, path: '/' });
        }

        function navigationMobileToggle() {
            navigationElements.hamburgerMenu.toggleClass("is-active");
            navigationElements.navigationLinkBackGround.toggleClass("is-visible");
            navigationElements.navigationItems.toggleClass("is-present");
        }




        // -------------------------
        // RETURN VALUES
        // -------------------------

        return {
            privacyElements: privacyElements,
            showPrivacyBanner: showPrivacyBanner,
            hidePrivacyBanner: hidePrivacyBanner,
            checkPrivacyCookie: checkPrivacyCookie,
            setPrivacyCookie: setPrivacyCookie
        }

    })();



    if (privacy.checkPrivacyCookie()) {
        setTimeout(privacy.showPrivacyBanner,  3000);
    }

    privacy.privacyElements.privacyButton.on("click", function() {
        privacy.hidePrivacyBanner();
        privacy.setPrivacyCookie();
    });


});