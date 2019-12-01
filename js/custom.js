$(window).scroll(function () {

    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $(".site-header, .main-navigation, .row.image-bg").addClass("minified");
    }

    if (scroll <= 99) {
        $(".site-header, .main-navigation, .row.image-bg").removeClass("minified");
    }

});


$("#primary-menu li a").click(function () {
    $("#primary-menu").toggleClass("menu-item-selected");
    $(".buttonwrap").toggleClass("menu-item-selected");
    $(".main-navigation").removeClass("toggled");
    $(".menu-toggle").attr("aria-expanded", "false");
    // $("#menuToggle input").attr("value", "false");   
    $("#menuToggle input").prop("checked", false); 
});