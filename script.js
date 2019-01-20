// hamburger icon is pressed
$(document).ready(function() {
    $("#ham").click(function() {
        $("#content").toggleClass("nav__content--responsive");
        $("#ham").toggleClass("nav__icon--transform-x");
    });
});