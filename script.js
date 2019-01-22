// hamburger icon is pressed
$(document).ready(function() {
    $("#ham").click(function() {
        $("#content").toggleClass("nav__content--responsive");
        $("#ham").toggleClass("nav__icon--transform-x");
    });

    $(".project-section__cell").click(function() {
        $("#close-up").css("display", "block");
        $("#close-up__image").attr("src", $(this).find("img").attr("src"));
    });

    $("#close-up").click(function() {
        $(this).css("display", "none");
        $("#close-up__image").attr("src", "");
    });
});