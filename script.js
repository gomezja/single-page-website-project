$(document).ready(function() {
    $("#navAbout").click(function() {
        $("html, body").animate({
            scrollTop: $("#about").offset().top
        }, 800);
    });

    $("#navProjects").click(function() {
        $("html, body").animate({
            scrollTop: $("#projects").offset().top
        }, 800);

    });

    $("#navContact").click(function() {
        $("html, body").animate({
            scrollTop: $("#contact").offset().top
        }, 800);
    });

    // hamburger icon is clicked
    $("#ham").click(function() {
        $("#content").toggleClass("nav__content--responsive");
        $("#ham").toggleClass("nav__icon--transform-x");
    });

    // project cell is clicked
    $(".project__cell").click(function() {
        $("body").addClass("body--overflow");

        $("#close-up").css("display", "block");
        $("#close-up__image").attr("src", $(this).find("img").attr("src"));

        // change text content in close-up
        $(".close-up__name").text($(this).find(".project__name").text());
        $(".close-up__type").text($(this).find(".project__type").text());

        // add close-up type class
        if($(this).find(".project__type").text().trim() == 'Design'){
            $(".close-up__type").addClass("project__type--design");
        } else {
            $(".close-up__type").addClass("project__type--development");
        }
    });

    // project close-up close button is clicked
    $(".close-up__button").click(function() {
        $("body").removeClass("body--overflow");

        $("#close-up").css("display", "none");
        $("#close-up__image").attr("src", "");

        var projectType = $(".close-up__type");

        // remove close-up type class
        if($(projectType).hasClass("project__type--design"))
            $(projectType).removeClass("project__type--design");
        else
            $(projectType).removeClass("project__type--development");
    });
});