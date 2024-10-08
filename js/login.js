$(document).ready(function() {

    let loginElements = {
        loginButton: $("#login"),
        usernameField: $(".username"),
        passwordField: $(".password")
    }

    function checkPassword(event) {

        let usernameInputValue = loginElements.usernameField.val();
        let passwordInputValue = loginElements.passwordField.val();

        if (usernameInputValue === "admin" && passwordInputValue === "37dzP9!") {
            $.cookie('authenticated', 'true', { expires: 1, path: '/' });
            window.location.replace("https://staging.hellergrafik.ch/index.php");
        }

        else {
            loginElements.loginButton.addClass("invalid");
            setTimeout(function() {
                loginElements.loginButton.removeClass("invalid");
            }, 1500)
        }

    } // -> END OF FUNCTION

    loginElements.loginButton.on("click", checkPassword);
    $(document).on("keypress", function(event) {
        if (event.key == "Enter") {
            checkPassword();
        }
    })

});
