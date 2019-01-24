var portfolio = $('#portfolio');

$(function(){	
	$(window).scroll(function(){
		if($(window).scrollTop() >= 1200){
		portfolio.css('opacity', '1');
		}
	});
});