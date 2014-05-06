$(document).ready(function() {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
            $('#shopping_cart').addClass('fixed-cart');
            $('#cart-block').addClass('fixed-cart-block');
            $('#header_user').addClass('fixed-header');
        }
        if ($(window).scrollTop() <= 10) {
            $('#shopping_cart').removeClass('fixed-cart');
            $('#car-block').removeClass('fixed-cart-block');
            $('#header_user').removeClass('fixed-header');
        }  
        if ($(window).scrollTop() > 154) { 
            $('.sf-menu').addClass('fixed-menu');
        }  
        if ($(window).scrollTop() <= 154) { 
            $('.sf-menu').removeClass('fixed-menu');
        }
    });
});