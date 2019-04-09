$(document).ready(function() {
    checkScrollBtn();

    /*================= Click Event Listeners =================*/
    // go to about section
    $("#goToAbout").click(function() {
        $("html, body").animate({
            scrollTop: $("#about").offset().top
        }, 800);
    });

    // go to projects section
    $("#goToProjects, #goToProjects2").click(function() {
        $("html, body").animate({
            scrollTop: $("#projects").offset().top
        }, 800);

    });

    // go to contact section
    $("#goToContact").click(function() {
        $("html, body").animate({
            scrollTop: $("#contact").offset().top + 1
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

        // change text content in modal
        $(".modal__name").text($(this).find(".project__name").text());
        $(".modal__type").text($(this).find(".project__type").text());
        $(".modal__description").text($(this).find(".project__description").text());

        // add modal type class
        if($(this).find(".project__type").text().trim() == 'Design')
            $(".modal__type").addClass("project__type--design");
        else
            $(".modal__type").addClass("project__type--development");
    });

    // project modal close button is clicked
    $(".modal__button-close").click(function() {
        closeModal();
    });

    // outside of project modal area is clicked
    $(window).click(function(event) {
        if($(event.target).hasClass("modal"))
            closeModal();
    });

    // close the modal
    function closeModal() {
        $(".modal").scrollTop(0);

        $("body").removeClass("body--overflow");

        $("#close-up").css("display", "none");
        $("#close-up__image").attr("src", "");

        // remove modal type class
        var projectType = $(".modal__type");

        if($(projectType).hasClass("project__type--design"))
            $(projectType).removeClass("project__type--design");
        else
            $(projectType).removeClass("project__type--development");
    }
    
    // go back up when scroll-up button is clicked
    $(".btn--scroll-up").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 800);
    });

    /*================= Scroll Event Listeners =================*/
    $(window).scroll(function() {
        checkScrollBtn();
    });

    // display or hide scroll button
    function checkScrollBtn() {
        var scrollBtn = $(".btn--scroll-up");
        var pos = $(window).scrollTop();

        if(pos > 100)
            $(scrollBtn).fadeIn(300);
        else
            $(scrollBtn).fadeOut(300);
    }
});