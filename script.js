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

        // change text content in close-up
        $(".close-up__name").text($(this).find(".project-section__project-name").text());
        $(".close-up__type").text($(this).find(".project-section__project-type").text());

        // add close-up type class
        if($(this).find(".project-section__project-type").text().trim() == 'Design'){
            $(".close-up__type").addClass("project-section__project-type--design");
        } else {
            $(".close-up__type").addClass("project-section__project-type--development");
        }
    });

    // project close up area is clicked
    $(".close-up__button").click(function() {
        $("#close-up").css("display", "none");
        $("#close-up__image").attr("src", "");

        // remove close-up type class
        if($(".close-up__type").hasClass("project-section__project-type--design"))
            $(".close-up__type").removeClass("project-section__project-type--design");
        else
            $(".close-up__type").removeClass("project-section__project-type--development");
    });
});