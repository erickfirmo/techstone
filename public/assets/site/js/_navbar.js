var header = $('#header');
var navigation = $('nav#main-navigation');
var navigationDown = false;
var logo = $('#logo');

function changeNavbar(down) {
    navigation.toggleClass('main-mini-navbar');
    logo.toggleClass('logo-mini');
    navigationDown = down;
}

$(window).scroll(function() {
    if($(this).scrollTop() > header.height()-60 && $(this).scrollTop() < header.height()+20) {
        if(navigationDown == true) {
            changeNavbar(true);
        } else if(navigationDown == false) {
            changeNavbar(false);
        }
    }
})

$(document).ready(function() {
    changeNavbar(true);
});

