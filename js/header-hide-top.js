$(window).scroll(function () {
    if ($(document).scrollTop() > 50) {
        $('#header-nav').addClass('visible');
    } else {
        $('#header-nav').removeClass('visible');
    }
});

