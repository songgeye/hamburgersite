jQuery(function ($) {
    $('#button__Open').click(function() {
        $('.navigation__menu').toggleClass('active');
        });
        $('.c_button').click(function() {
            $('.navigation__menu').removeClass('active');
        });
});