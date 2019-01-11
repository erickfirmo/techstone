var navbar = $('nav#main-navigation');
var logo = $('#logo');

$(function(){	
	$(window).scroll(function(){
		if($(window).scrollTop() <= 40){
            navbar.removeClass('navbar-scroll');
            logo.removeClass('logo-mini');

		} else {
            navbar.addClass('navbar-scroll');
            logo.addClass('logo-mini');

		}
	});
});
