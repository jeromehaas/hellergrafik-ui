let ux = (function() {

    // NAVIGATION MOBILE TOGGLE


    let navigationElements = {
        navigationItems: $(".navigation-mobile__navigation-item"),
        hamburgerMenu: $(".navigation-mobile__hamburger-menu"),
        navigationLogo: $(".navigation-mobile__logo")
    }

    function navigationMobileToggle() {
            navigationElements.hamburgerMenu.toggleClass("is-active");
    }

    return {
        navigationElements: navigationElements,
        navigationMobileToggle: navigationMobileToggle
    }

})();

ux.navigationElements.navigationItems.on("click", ux.navigationMobileToggle);
ux.navigationElements.hamburgerMenu.on("click", ux.navigationMobileToggle);
ux.navigationElements.navigationLogo.on("click", ux.navigationMobileToggle);