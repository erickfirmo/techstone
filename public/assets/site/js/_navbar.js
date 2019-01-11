var header = $('#header');
var navigation = $('nav#main-navigation');
var navigationDown = false;
var logo = $('#logo');
$(window).scroll(function() {
    if(window.innerWidth > 992) {
        if($(this).scrollTop() > header.height()-60 && $(this).scrollTop() < header.height()+20 && navigationDown == false) {
            navigationDown = true;
            navigation.toggleClass('main-mini-navbar');
            logo.toggleClass('logo-mini');
        } else if($(this).scrollTop() > header.height()-60 && $(this).scrollTop() < header.height()+20 && navigationDown == true){
            navigationDown == false;
            navigation.toggleClass('main-mini-navbar');
            logo.toggleClass('logo-mini');
        }
    }
})