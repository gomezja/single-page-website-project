$(document).ready(function() {
    // hamburger icon is clicked
    $("#ham").click(function() {
        $("#content").toggleClass("nav__content--responsive");
        $("#ham").toggleClass("nav__icon--transform-x");
    });

    // project cell is clicked
    $(".project-section__cell").click(function() {
        $("#close-up").css("display", "block");
        $("#close-up__image").attr("src", $(this).find("img").attr("src"));
    });

    // project close up area is clicked
    $("#close-up").click(function() {
        $(this).css("display", "none");
        $("#close-up__image").attr("src", "");
    });
});