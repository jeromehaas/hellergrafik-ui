let ux = (function() {

    // -------------------------
    // NAVIGATION MOBILE TOGGLE
    // -------------------------

    let navigationElements = {
        navigationItems: $(".navigation-mobile__link-background__list-item"),
        hamburgerMenu: $(".navigation-mobile__hamburger-menu"),
        navigationLogo: $(".navigation-mobile__logo"),
        navigationLinkBackGround: $(".navigation-mobile__link-background")
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
        navigationElements: navigationElements,
        navigationMobileToggle: navigationMobileToggle
    }

})();

ux.navigationElements.navigationItems.on("click", ux.navigationMobileToggle);
ux.navigationElements.hamburgerMenu.on("click", ux.navigationMobileToggle);
ux.navigationElements.navigationLogo.on("click", ux.navigationMobileToggle);
